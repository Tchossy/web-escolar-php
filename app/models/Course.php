<?php

namespace app\models;

class Course
{
  private $conn;
  private $table = 'course';

  public $id;
  public $image_course;
  public $title_course;
  public $description_course;
  public $years;
  public $period;
  public $monthly_course;
  public $course_structure;
  public $requerements;
  public $how_to_apply;
  public $faq;
  public $date_create;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function getAll()
  {
    $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id DESC';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function getById($id)
  {
    $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt;
  }
}