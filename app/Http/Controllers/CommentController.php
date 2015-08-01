<?php namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateCommentRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('comment.form');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCommentRequest $request)

	{
		$comment=$request->all();
		$comment['published_at']= Carbon::now();
		$comment['user_id']= Auth::user()->id;

		Comment::create($comment);

		session()->flash('flash_message', 'Your comment has been created');
		return redirect('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comment= Comment::findOrFail($id);
		return view('comment.edit', compact('comment'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateCommentRequest $request)
	{
		$comment= Comment::findOrFail($id);

		$comment->update($request->all());

		session()->flash('flash_message', 'Your comment has been updated');
		return redirect('/');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
