<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use Auth;

class APIController extends Controller
{

    // Delete post comment
    public function deletePostComment($post_id, $comment_id, Request $request) {
        // Delete post comment here... TODO
    }

    // Update post comment
    public function updatePostComment($post_id, $comment_id, Request $request) {
        // Update post comment here... TODO
    }

    // Create post comment
    public function createPostComment($post_id, Request $request) {
        // Create post comment here... TODO
    }

    // Delete post
    public function deletePost($post_id) {
        // Delete post here... TODO
    }

    // Update post
    public function updatePost($post_id, Request $request) {
        // Update post here... TODO
    }

    // Create post
    public function createPost(Request $request) {
        // Create post here... TODO
    }

    // Post comment
    public function getPostComment($post_id) {
        // Retrieve post here... TODO
        // Return specified Payload...
        return json_encode('success', true);
    }

    // Post (Single post)
    public function getPost($post_id) {
        // Retrieve post here... TODO
        // /*Payload*/{
        //     "data": {
        //         "id": 1,
        //         "user_id": 1,
        //         "title": "new title",
        //         "slug": "new-title",
        //         "content": "content of the post",
        //         "created_at": "2019-01-23 02:06:06",
        //         "updated_at": "2019-01-23 02:13:26",
        //         "deleted_at": null
        //     }
        // }
        return json_encode('success', true);
    }

    // Posts
    public function getPosts() {
        // Retrieve posts here... TODO
        // /*Payload*/{
        //     "data": [
        //         {
        //             "id": 1,
        //             "user_id": 1,
        //             "title": "new title",
        //             "slug": "new-title",
        //             "content": "content of the post",
        //             "created_at": "2019-01-23 02:06:06",
        //             "updated_at": "2019-01-23 02:13:26",
        //             "deleted_at": null
        //         }
        //     ],
        //     "links": {
        //         "first": "http://127.0.0.1:8000/api/posts?page=1",
        //         "last": "http://127.0.0.1:8000/api/posts?page=1",
        //         "prev": null,
        //         "next": null
        //     },
        //     "meta": {
        //         "current_page": 1,
        //         "from": 1,
        //         "last_page": 1,
        //         "path": "http://127.0.0.1:8000/api/posts",
        //         "per_page": 15,
        //         "to": 1,
        //         "total": 1
        //     }
        // }
        return json_encode('success', true);
    }

    // Login
    public function login(Request $request) {

        if( $request->has('email')
        && $request->has('password')) {
            // Process login
            // Extra validation/filter here... TODO
            $isValidUser = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if ($isValidUser) {
                // /*Payload*/{
                //     "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc4NzYyYzZjMTJjY2Y4MGM1OWUxMjQwYmQxOWMwODAyZDE4ZDU4MTFiNGZjNDE0ZjhkNDRkZWNjMzMyNzlkMDQwNGRhOTRlM2RlMmYxMTEwIn0.eyJhdWQiOiIxIiwianRpIjoiNzg3NjJjNmMxMmNjZjgwYzU5ZTEyNDBiZDE5YzA4MDJkMThkNTgxMWI0ZmM0MTRmOGQ0NGRlY2MzMzI3OWQwNDA0ZGE5NGUzZGUyZjExMTAiLCJpYXQiOjE1NDgyMDg1NDYsIm5iZiI6MTU0ODIwODU0NiwiZXhwIjoxNTc5NzQ0NTQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.N1TtHvUOMlTZ27DH9Rr_KVLQgubsMnG-rBonYnd5ACwbOL2KdVkjj4r_tn_XfJS49VacycysvMaTiXf7q8d9r2iMZkR5Yfj7y1nTEGTpXSukEV6vhrcdYx_1Lq6G9uXpO9Sj1sSI8kEtNsrbJy2Xzz1S916sLD8hZ9RYqwyHj__HKEQdjyHrHSLjEWp13SQd44g028k94iEnNWnt79ghEgdyCcq2JfGa6cu7vkr-XF8VU_mMEmK3OMz8qhwnZZ63xnYcHcKCYCJuSY1R49WAOKhcc4xVx03B7czQT2UzCcitftzyjKNTAl1YAE2fnjM5Sb0PEPj6MIy48RLAIDXykvI--Aec3oWrlBfzNKZzux1IQ22aihooUZrKhZ5mxxaFPbayRD8iVWogHONrDbNnMBkBu62MsH70xWHqREhU2jJWPyeg-bM5d4tnQPle_qPFNVr7tjH8Y1cFKcWrcsS1SIz5vMEiNbTM0q0GCUzVfDQ3my5Z4_gcrfu0YXHWvQVXzsZw2Fc3X4IjoEWc1CEhSVsp2-KjJOI2DQN_h3uz9BfPxQLlzXYCxxSZ0tjbqz6-s_vzEC5IfY2qZ8QHJGe5__UTmoVJjYJ8yvFHctyJMXoJ_zV37sU6z_yATEJLJN8eRI1fpD9LkD7yYX-9s26_A5qtO52FDqGDLh6d2xO9o4I",
                //     "token_type": "bearer",
                //     "expires_at": "2020-01-23 01:55:46"
                // }
                // TODO
                return json_encode('success', true);
            }   
        }
        // Error here... TODO
        // /*Payload*/{
        //     "message": "The given data was invalid.",
        //     "errors": {
        //         "email": [
        //             "These credentials do not match our records."
        //         ]
        //     }
        // }...
        return json_encode('fail', true);

    }


    // Registration
    public function register(Request $request) {

        /*Payload*/
        // \"name\" : \"Bertrand Kintanar\",
	    // \"email\": \"bertrand_kintanar@ligph.com\",
	    // \"password\": \"password\",
        // \"password_confirmation\": \"password\"
        if( $request->has('name') 
        && $request->has('email')
        && $request->has('password')
        && $request->has('password_confirmation')) {
            // Process registration
            // Extra validation here... TODO
            // Use Auth registration
            $reg = new RegisterController();
            // Add validator before registration... TODO
            $reg->register($request);
            // /*Payload*/{
            //     "data": [
            //         {
            //             "id": 1,
            //             "user_id": 1,
            //             "title": "new title",
            //             "slug": "new-title",
            //             "content": "content of the post",
            //             "created_at": "2019-01-23 02:06:06",
            //             "updated_at": "2019-01-23 02:13:26",
            //             "deleted_at": null
            //         }
            //     ],
            //     "links": {
            //         "first": "http://127.0.0.1:8000/api/posts?page=1",
            //         "last": "http://127.0.0.1:8000/api/posts?page=1",
            //         "prev": null,
            //         "next": null
            //     },
            //     "meta": {
            //         "current_page": 1,
            //         "from": 1,
            //         "last_page": 1,
            //         "path": "http://127.0.0.1:8000/api/posts",
            //         "per_page": 15,
            //         "to": 1,
            //         "total": 1
            //     }
            // }
            // TODO
            return json_encode('success', true);
        }

        // Process errors
        // /*Payload*/{
        //     "message": "The given data was invalid.",
        //     "errors": {
        //         "email": [
        //             "The email has already been taken."
        //         ],
        //         "password": [
        //             "The password confirmation does not match."
        //         ]
        //     }
        // }...
        // TODO
        $errors = array(
            'message' => 'The given data was invalid.',
            'errors' => array(
                // specific errors TODO
                'email' => $email_error,
                'name' => $name_error,
                'password' => $password_error
            ));
        // Array to json here TODO...
        return json_encode($errors, true);
    }
}
