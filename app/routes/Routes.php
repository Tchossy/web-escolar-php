<?php

namespace app\routes;

class Routes
{
  public static function get()
  {
    return [
      'get' => [
        // BASE VIEW ROUTES
        "/" => 'BaseController@home',
        "/about" => 'BaseController@about',
        "/ensinos-medio" => 'BaseController@ensinosMedio',
        "/ensinos-medio/details/[0-9]+" => 'BaseController@ensinosMedioDetails',
        "/blog" => 'BaseController@blog',
        "/blog/details/[0-9]+" => 'BaseController@blogDetails',
        "/contact" => 'BaseController@contact',
        "/apply" => 'BaseController@apply',

        // BASE CONTROLLERS ROUTES
        "/blog/get/all" => 'BlogController@getAllBlogs',
        "/blog/get/one/[0-9]+" => 'BlogController@getBlogById',

        "/course/get/all" => 'CourseController@getAllCourses',
        "/course/get/one/[0-9]+" => 'CourseController@getCourseById',
      ],
      'post' => [
        // '/search/.*' => 'UserController@getUserById',
        '/user/search/[0-9]+' => 'UserController@getUserById',
        '/user/create' => 'UserController@createUser',
      ],
      'delete' => [
        '/user/delete/[0-9]+' => 'UserController@deleteUserById',
      ],
      'put' => [
        '/user/update/[0-9]+' => 'UserController@updateUser',
      ],
    ];
  }
};