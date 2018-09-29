<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Return whole list of users<br>
     * No authorization required
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Create new post<br>
     * Only if the Posts' policy allows it
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $rules = array(
            'name'      => 'required|string',
            'email'     => 'required|unique:users|email',
            'username'  => 'required|unique:users|string',
            'password'  => 'required|string'
        );
        $this->validate(Request::instance(), $rules);

        //$this->authorize('create', User::class);

        $user = new User();
        $user = Input::all();
        $user->password = Input::get('password');
        $user->save();

        return response()->json($user);
    }

    /**
     * Update post<br>
     * Only if the Posts' policy allows it
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function update($post_id)
    // {
    //     $rules = array(
    //         'subject'   => 'required|string',
    //         'body'      => 'required|string',
    //     );
    //     $this->validate(Request::instance(), $rules);

    //     $post = Post::find($post_id);
    //     $this->authorize('update', $post);

    //     try {
    //         $post->subject = Input::get('subject');
    //         $post->body = Input::get('body');
    //         $post->save();

    //         return response()->json($post);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'message' => 'Post not updated',
    //             'error' => $e->getMessage()
    //         ], 400);
    //     }
    // }
}
