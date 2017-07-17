<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class References_model extends CI_Model
{
    //get list references
    public function getLists($tabref,$tabmed,$cat){
    	switch ($cat) {
    		case 'CH':
    			$count ='countCH';
    			$list = 'listCH';
    			break;
			case 'IC':
    			$count ='countIC';
    			$list = 'listIC';
    			break;
			case 'CC':
    			$count ='countCC';
    			$list = 'listCC';
    			break;
    	}
    	$str = 'SELECT * FROM '.$tabref;
    	$query = $this->db->query($str);
		$return[$count] = $query->num_rows();
		$return[$list] = $query->result_array();
		$i=0;
		foreach ($return[$list] as $key => $value) {
			
			$string = 'SELECT * FROM '.$tabmed.' WHERE id_real = "'.$return[$list][$i]["id"].'"';
			$query2 = $this->db->query($string);
			$return[$list][$i]['nbtof'] = $query2->num_rows();
			if ($return[$list][$i]['nbtof'] != 0) { 
				$j =0;
				$array = array();
				foreach ($query2->result_array() as $key => $value) {
					$array = $value['source'];
					$return[$list][$i]['photos'][$j] = $array;$j++;
				}
			}
			else{
				$return[$list][$i]['photos'][0] = 'noPics.png';
			}

			$i++;
		}

		return $return;
    }

    public function newReal($post,$table){
    	$data = array(
        'titre' => $post['titre'],
        'texte' => $post['texte']
		);

		$this->db->insert($table, $data);
    }

    public function supReal($table,$tablemedias,$id){
    	//recuperation du nom des photos en bdd
    	$str = 'SELECT * FROM '.$tablemedias.' WHERE id_real ='.$id.' ';
    	$query = $this->db->query($str);
		$fichiers = $query->result_array();
		//effacement physique
		foreach ($fichiers as $key => $value) {
			$filename = './assets/images/'.$value['source'];
    		unlink($filename);
		}
    	//effacement bdd
    	$this->db->delete($table, array('id' => $id));
    	$this->db->delete($tablemedias, array('id_real' => $id));
    }
    public function modifReal($table,$post){
    	$data = array(
        'titre' => $post['titre'],
        'texte' => $post['texte']
		);

		$this->db->where('id', $post['id']);
		$this->db->update($table , $data);
    }
    public function supPhoto($table, $post){
    	foreach ($post['tosup'] as $key => $value) {
    		//supprimer image
    		$filename = './assets/images/'.$value;
    		$source = $value;
    		unlink($filename);
    		//supprimer en bdd
    		$this->db->delete($table, array('source' => $source));
    	}
    }
    public function addPhoto($table, $post){
    	//enregistre images
    	//load library
	    	$this->load->library('upload');
	    	// config upload
	    	$config['upload_path'] = './assets/images';
	    	$config['allowed_types'] = 'gif|jpg|png';
        	$config['max_size']    = '0';
        	$this->upload->initialize($config);
        	if (!$this->upload->do_upload('photo')) {
        		$test['message'] = "echec";$test['message2'] = array('error' => $this->upload->display_errors());
        	}
        	else{
        		$test['message'] = "fichier correctement envoyé";
        		//si ok mettre en bdd
        		$array = array('upload_data' => $this->upload->data());
        		$name = $array['upload_data']['file_name'];
        		$data = array(
		        'id_real' => $post['id'],
		        'source' => $name
				);

				$this->db->insert($table, $data);
        	}
    	
    }
}
