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
}
