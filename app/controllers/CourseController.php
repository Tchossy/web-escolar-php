<?php

namespace app\controllers;

require_once(__DIR__ . '/../models/Course.php');
require_once(__DIR__ . '/../utils/Response.php');
require_once(__DIR__ . '/../config/Database.php');

use app\models\Course;
use app\utils\Response;
use Database;
use PDO;

class CourseController
{
  private $db;
  private $courseModel;

  public $lastPart;

  public function __construct()
  {
    $currentURL = $_SERVER['REQUEST_URI'];

    // Obtém a última parte da URI
    $parts = explode('/', $currentURL);

    $this->lastPart = end($parts);

    $database = new Database();
    $this->db = $database->getConnection();
    $this->courseModel = new Course($this->db);
  }

  public function index()
  {
    echo "Course";
  }

  public function getAllCourses()
  {
    $result = $this->courseModel->getAll();
    $num = $result->rowCount();

    if ($num > 0) {
      $courses_arr = array();
      $courses_arr['data'] = array();

      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $course_item = array(
          'id' => $id,
          'image_course' => $image_course,
          'title_course' => $title_course,
          'description_course' => $description_course,
          'years' => $years,
          'period' => $period,
          'monthly_course' => $monthly_course,
          'course_structure' => $course_structure,
          'requerements' => $requerements,
          'how_to_apply' => $how_to_apply,
          'faq' => $faq,
          'date_create' => $date_create
        );

        array_push($courses_arr['data'], $course_item);
      }

      Response::send(200, $courses_arr);
    } else {
      Response::send(404, array('message' => 'Nenhum usuário encontrado.'));
    }
  }

  public function getCourseById()
  {
    $id = $this->lastPart;

    $result = $this->courseModel->getById($id);
    $num = $result->rowCount();

    if ($num > 0) {
      $row = $result->fetch(PDO::FETCH_ASSOC);
      extract($row);
      $course_item = array(
        'id' => $id,
        'image_course' => $image_course,
        'title_course' => $title_course,
        'description_course' => $description_course,
        'years' => $years,
        'period' => $period,
        'monthly_course' => $monthly_course,
        'course_structure' => $course_structure,
        'requerements' => $requerements,
        'how_to_apply' => $how_to_apply,
        'faq' => $faq,
        'date_create' => $date_create,
      );

      Response::send(200, $course_item);
    } else {
      Response::send(404, array('message' => 'Usuário não encontrado.'));
    }
  }

  // 404
  public function notFound()
  {
    echo "404";
  }
}