<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdo';


//Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create PDO instance

$pdo = new PDO($dsn, $user, $password);

// this is will allow ass to write fetch() empty because it will set attr for fetching data
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// this is for make the LIMIT work !
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



#PDO  QUERY

//$stmt = $pdo->query('SELECT * FROM posts');

// there are option to fetch for example : fetch as object or fetch as associative array

//FETCH_ASSOC example

//while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    echo $row['title'].'<br>';
//}

//FETCH_OBJ example

//while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
//    echo $row->title.'<br>';
//}

// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ); (can be overriding)

//while ($row = $stmt->fetch()) {
//    echo $row->title . '<br>';
//}


//===============================================================

#PREPARED STATEMENTS (prepare & execute)

//UNSAFE

//$sql = "SELECT * FROM posts WHERE author = '$author'";






// FETCH MULTIPLE POSTS

//User Input
$author = 'Brad';
$is_published = true;
$id = 1;
$limit = 1;


// positional Params  (WHERE author = ?')

$sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author, $is_published, $limit]);
$posts = $stmt->fetchAll();


//Named Params (WHERE author = :author)

//$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['author' => $author, 'is_published' => $is_published]);
//$posts = $stmt->fetchAll();




//var_dump($posts);

foreach ($posts as $post){
 echo $post->title.'<br>';
}


//FETCH SINGLE POST


//$sql = 'SELECT * FROM posts WHERE id = :id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id' => $id]);
////no need fetchAll because its only one post to fetch !
//$post = $stmt->fetch();
//echo $post->body;




//GET ROW COUNT

//$stmt = $pdo->prepare('select * FROM posts WHERE author = ?');
//$stmt -> execute([$author]);
//$postCount  = $stmt->rowCount();
//echo $postCount;




//INSERT DATA

//$title = 'post five';
//$body = 'this is post 5 ';
//$author = 'Kevin';
//
//$sql = 'INSERT INTO posts(title, body, author) VALUES (:title, :body, :author)';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
//echo 'Post Added';









// UPDATE DATA

//$id = 1;
//$body = 'this is post updated ';
//
//
//$sql = 'UPDATE posts SET body = :body WHERE id = :id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['body' => $body, 'id' => $id]);
//echo 'Post Updated';





//DELETE DATA


//$id = 3;
//
//$sql = 'DELETE FROM posts WHERE id = :id';
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['id' => $id]);
//echo 'Post Deleted';





//SEARCH DATA
//
//$search = "%title%";
//$sql = 'SELECT * FROM posts WHERE title LIKE ?';
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$search]);
//$posts = $stmt->fetchAll();
//
//foreach ($posts as $post){
//    echo $post->title.'<br>';
//}