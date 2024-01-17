<?php 

function surveys() {
  require_once "./views/pages/survey/surveys.php";
}

function survey($vars) {
  ["surveyId" => $surveyId] = $vars;

  $month = $_GET["month"] ?? date("n");
  $year = $_GET["year"] ?? date("Y");

  $calendar = new Calendar($month, $year);
  $current = $calendar->getCurrent();
  $prev = $calendar->getPrev();
  $next = $calendar->getNext();

  require_once "./views/pages/survey/survey.php";
}

function surveysCreate() {
  require_once "./views/pages/survey/surveysCreate.php";
}

?>