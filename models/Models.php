<?php
require('Database.php');


class Model extends Db
{
    public function insertModel(array $post)
    {
        // print_r($post);
        $title = $post['title'];
        $body = $post['body'];
        $category = $post['category'];
        $image = $post['image'];
        $query = "INSERT INTO posts(`user_id`, `title`, `body`, `Category`, `image`) VALUES(1, '$title', '$body', '$category', '$image')";
        $sql = $this->con->query($query);
        return $sql;
    }

    public function get_data()
		{
			$query = "SELECT * FROM posts";
			$result = $this->con->query($query);
			if ($result->num_rows > 0) {
				$data = array();
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				echo "No found records";
			}
		}
    public function delete_article($id)
		{
			$query = "DELETE FROM posts WHERE id = '$id'";
			$sql = $this->con->query($query);
			if ($sql==true) {
				echo "article was deleted successfully";;
			}else{
				echo "Record does not delete try again";
			}
		}

      
}
