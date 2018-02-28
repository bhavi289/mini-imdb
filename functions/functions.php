<?php

require_once("config.php");
session_start();

	class Functions{
		public function __construct(){
			$connect=new Config();
			$this->db=$connect->connection();

		}

		public function start_session(){
			return session_start();
		}

		public function test(){
			$res=$this->db->query("insert into test(a) values('test')");
			if($res){
				return "done";
			}
		}

		public function signup($name, $age, $password, $phone, $type){
			$res = $this->db->query("insert into users(user_id, name, password, age, phone, user_type) values(".(string)($this->db->query("SELECT MAX(user_id) FROM `users` WHERE user_type=1 OR user_type=2")->fetch_assoc()['MAX(user_id)']+1).",'$name', '$password','$age','$phone', '$type')");
			if($res){
				return "done";
			}
			else{
				return $type;
			}
		}

		public function admin_login($phone, $password){
			$res = $this->db->query("SELECT id, user_id, name, phone, age, user_type FROM  `users` WHERE (phone='$phone' and password='$password' and user_type='0')");
			if($res){	
				if($res->num_rows > 0){
					$data = $res->fetch_assoc();
					$_SESSION['admin_logged_in'] = TRUE;
					$_SESSION['name'] = $data['name'];
					$_SESSION['id'] = $data['id'];
					$_SESSION['user_id'] = $data['user_id'];
					$_SESSION['type'] = $data['user_type'];
					return "successfull";
				}
				else{
					return "failed";
				}
			}
			else{
				return "query chuthiya".$phone.$password;
			}
			// $this->test();
		}

		public function user_login($phone, $password){
			$res = $this->db->query("SELECT id, user_id, name, phone, age, user_type FROM  `users` WHERE (phone='$phone' and password='$password' and user_type='1')");
			if($res){	
				if($res->num_rows > 0){
					$data = $res->fetch_assoc();
					$_SESSION['user_logged_in'] = TRUE;
					$_SESSION['name'] = $data['name'];
					$_SESSION['id'] = $data['id'];
					$_SESSION['user_id'] = $data['user_id'];
					$_SESSION['type'] = $data['user_type'];
					return "successfull";
				}
				else{
					return "failed".$phone.$password;
				}
			}
			else{
				return "query chuthiya".$phone.$password;
			}
			// $this->test();
		}

		public function critic_login($phone, $password){
			$res = $this->db->query("SELECT id, user_id, name, phone, age, user_type FROM  `users` WHERE (phone='$phone' and password='$password' and user_type='2' and status='1')");
			if($res){	
				if($res->num_rows > 0){
					$data = $res->fetch_assoc();
					$_SESSION['critic_logged_in'] = TRUE;
					$_SESSION['name'] = $data['name'];
					$_SESSION['id'] = $data['id'];
					$_SESSION['user_id'] = $data['user_id'];
					$_SESSION['type'] = $data['user_type'];
					return "successfull";
				}
				else{
					return "failed";
				}
			}
			else{
				return "query chuthiya".$phone.$password;
			}
			// $this->test();
		}

		public function get_unapproved_critics(){
			$res = $this->db->query("SELECT * FROM `users` WHERE (user_type='2' and status='0')");
			$unapproved_critics = array();
			if($res->num_rows > 0){
				while($data = $res->fetch_assoc()){
					array_push($unapproved_critics, $data);
				}
			}
			return $unapproved_critics;
		}

		public function get_approved_critics(){
			$res = $this->db->query("SELECT * FROM `users` WHERE (user_type='2' and status='1')");
			$unapproved_critics = array();
			if($res->num_rows > 0){
				while($data = $res->fetch_assoc()){
					array_push($unapproved_critics, $data);
				}
			}
			return $unapproved_critics;
		}

		public function get_all_viewers(){
			$res = $this->db->query("SELECT * FROM `users` WHERE (user_type='1')");
			$unapproved_critics = array();
			if($res->num_rows > 0){
				while($data = $res->fetch_assoc()){
					array_push($unapproved_critics, $data);
				}
			}
			return $unapproved_critics;
		}

		public function approve_critics($unapproved_critics){
				$length = sizeof($unapproved_critics);
				for($i = 0; $i < $length; $i++ ){
					$res = $this->db->query("UPDATE `users` SET status='1' where id='$unapproved_critics[$i]'");
				}
				return;
		}

		public function disapprove_critics($unapproved_critics){
				$length = sizeof($unapproved_critics);
				for($i = 0; $i < $length; $i++ ){
					$res = $this->db->query("DELETE FROM `users` WHERE id='$unapproved_critics[$i]'");
				}
				return;
		}

		public function get_all_movies(){
			$res = $this->db->query("SELECT * FROM `movies`");
			return $res;
		}

		public function get_all_genres(){
			$res = $this->db->query("SELECT * FROM `genre`");
			return $res;
		}

		public function get_all_genre_categories(){
			$res = $this->db->query("SELECT * FROM `all_generes`");
			return $res;
		}

		public function get_movie_ratings($movie_id){
			// $res = $this->db->query("SELECT r.id, r.star, m.name, m.movie_id, r.user_id FROM `ratings` r INNER JOIN `movies` m ON m.movie_id = r.movie_id WHERE m.movie_id = '$movie_id' AND r.user_type = '1' ;");
			$res = $this->db->query("SELECT r.id, r.star, m.name, m.movie_id, r.user_id, u.name as name2 FROM `ratings` r INNER JOIN `movies` m ON m.movie_id = r.movie_id INNER JOIN `users` u ON u.user_id = r.user_id  WHERE m.movie_id = '$movie_id' AND r.user_type = '1'");
			return $res;
		}

		public function get_movie_ratings_critics($movie_id){
			$res = $this->db->query("SELECT r.id, r.star, m.name, m.movie_id, r.user_id, u.name as name2 FROM `ratings` r INNER JOIN `movies` m ON m.movie_id = r.movie_id INNER JOIN `users` u ON u.user_id = r.user_id  WHERE m.movie_id = '$movie_id' AND r.user_type = '2'");
			return $res;
		}

		public function add_movie($movie_id, $name, $tagline, $description, $homepage, $budget, $release_date, $language, $image, $target, $selected_genres){
			$res = $this->db->query("INSERT INTO `movies`(movie_id, name, tagline, description, homepage, budget, release_date, language, image) VALUES('$movie_id', '$name', '$tagline', '$description', '$homepage', '$budget', '$release_date', '$language','$image')");
			if($res){
				$selected_genres = json_decode($selected_genres);
				$length = sizeof($selected_genres);
				for($i = 0; $i < $length; $i++ ){
					$res2 = $this->db->query("INSERT INTO `genre`(genre_id, movie_id) VALUES('$selected_genres[$i]', '$movie_id')");		
				}
				return "Done";
			}
			else{
				return "False2";
			}

		}

		public function get_movie_details($movie_id){
			$res = $this->db->query("SELECT * FROM `movies` WHERE movie_id='$movie_id'");
			return $res->fetch_assoc();
		}

		public function check_existing_rating($movie_id, $user_id){
			$res = $this->db->query("SELECT * FROM `ratings` WHERE movie_id='$movie_id' and user_id='$user_id'");
			return $res->fetch_assoc();
			
		}

		public function give_rating_movie_user($rating, $movie_id, $user_id){
			$rating_id = uniqid();
			$user_type = 1;
			// $user_type = $_SESSION['user_type'];
			$res = $this->db->query("INSERT INTO `ratings` (rating_id, movie_id, user_id, star, user_type) VALUES ('$rating_id','$movie_id', '$user_id', '$rating', '$user_type')");
			if($res){
				return "success";
			}
			else{
				return "fail";
			}
		}

		public function give_rating_movie_critic($rating, $movie_id, $user_id){
			$rating_id = uniqid();
			$user_type = 2;
			// $user_type = $_SESSION['user_type'];
			$res = $this->db->query("INSERT INTO `ratings` (rating_id, movie_id, user_id, star, user_type) VALUES ('$rating_id','$movie_id', '$user_id', '$rating', '$user_type')");
			if($res){
				return "success";
			}
			else{
				return $res;
			}
		}

		public function get_user_ratings($user_id){
			$res = $this->db->query("SELECT * FROM `ratings` r INNER JOIN `movies` m ON m.movie_id=r.movie_id WHERE user_id='$user_id'");

			$user_ratings = array();
			if($res->num_rows > 0){
				while($data = $res->fetch_assoc()){
					array_push($user_ratings, $data);
				}
			}
			return $user_ratings;
		}

		public function movie_filter($filter){
			if($filter==1){
				$res = $this->db->query("SELECT * FROM `movies` ORDER BY name ASC");
				return $res;	
			}
			if($filter==2){
				$res = $this->db->query("SELECT * FROM `movies` ORDER BY release_date DESC");
				return $res;	
			}
			if($filter==3){
				$res = $this->db->query("SELECT * FROM `movies` ORDER BY viewer_rating DESC");
				return $res;	
			}
			if($filter==4){
				$res = $this->db->query("SELECT * FROM `movies` ORDER BY critics_rating DESC");
				return $res;	
			}
			
		}

		public function all_genres(){
			$res = $this->db->query("SELECT * FROM `all_generes`");
			return $res;
		}

		public function get_genre_name($genre_id){
			$name = $this->db->query("SELECT * FROM `all_generes` WHERE genre_id='$genre_id'");
			return $name->fetch_assoc();
		}

		public function get_movie_genres($movie_id){
			$movie_genres = $this->db->query("SELECT * FROM `genre` WHERE movie_id = '$movie_id'");
			return $movie_genres;
		}

		public function get_movie_by_genre($genre_id){
			$res = $this->db->query("SELECT  m.name, m.movie_id, g.genre_id, m.release_date, m.total_viewer_ratings, m.total_critic_ratings, m.critics_rating, m.viewer_rating, m.language, m.image FROM `movies` m  INNER JOIN `genre` g ON g.movie_id WHERE g.movie_id = m.movie_id AND g.genre_id = '$genre_id'");
			return $res;
		}

		public function viewer_profile($user_id){
			$res = $this->db->query("SELECT m.name, r.star FROM `movies` m INNER JOIN `ratings` r ON m.movie_id = r.movie_id WHERE r.star = (SELECT MAX(star) FROM `ratings` WHERE user_id = '$user_id') AND user_id='$user_id' ");
			if($res){
				return $res->fetch_assoc();
			}
			else{
				return "Fail";
			}
		}

		public function critics_profile($user_id){
			$res = $this->db->query("SELECT m.name, r.star FROM `movies` m INNER JOIN `ratings` r ON m.movie_id = r.movie_id WHERE r.star = (SELECT MAX(star) FROM `ratings` WHERE user_id = '$user_id') AND user_id='$user_id' ");
			if($res){
				return $res->fetch_assoc();
			}
			else{
				return "Fail";
			}
		}

		public function viewer_profile_2($user_id){
			$res = $this->db->query("SELECT m.name, r.star FROM `movies` m INNER JOIN `ratings` r ON m.movie_id = r.movie_id WHERE r.star = (SELECT MIN(star) FROM `ratings` WHERE user_id = '$user_id') AND user_id='$user_id' ");
			if($res){
				return $res->fetch_assoc();
			}
			else{
				return "Fail";
			}
		}

		public function critics_profile_2($user_id){
			$res = $this->db->query("SELECT m.name, r.star FROM `movies` m INNER JOIN `ratings` r ON m.movie_id = r.movie_id WHERE r.star = (SELECT MIN(star) FROM `ratings` WHERE user_id = '$user_id') AND user_id='$user_id' ");
			if($res){
				return $res->fetch_assoc();
			}
			else{
				return "Fail";
			}
		}

		


		public function logout(){
			session_destroy();
			return;
		}
	}
	$functions = new Functions();

?>
