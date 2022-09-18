<?php

require_once __DIR__ . "/vendor/autoload.php";

$router = new ExpressRouter\Router();

$router->get("/", function ($req, $res) {
    return $res->response(array("ok" => true, "tip" => "Use /articles"));
});

$router->get("/articles", function ($req, $res) {
    return $res->response(array("example" => "list of articles"));
});

$router->get("/articles/:id", function ($req, $res) {
    return $res->response(array("example" => "details of the article with id " . $req->parameters["id"]));
});

$router->get("/articles/:id/comments", function ($req, $res) {
    return $res->response(array("example" => "list of comments of the article with id " . $req->parameters["id"]));
});

$router->post("/articles", function ($req, $res) {
    return $res->response(array("example" => "create a new article"));
});

$router->put("/articles/:id", function ($req, $res) {
    return $res->response(array("example" => "update the article with id " . $req->parameters["id"]));
});

$router->route(isset($_GET["path"]) ? $_GET["path"] : "");

