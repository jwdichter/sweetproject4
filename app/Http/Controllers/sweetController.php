<?php namespace App\Http\Controllers;
use Request;
class sweetController extends Controller {
	public function getIndex() {
		return view('index');
	}
	
	public function getText() {
		return view('textForm');
	}
	
	public function postText() {
		$number = Request::input('number');
		$paragraphs = $this->getParagraphs($number);
		return view('resultsText')->with('paragraphs', $paragraphs);
	}
	
	public function getPeople() {
		return view('peopleForm');
	}
	
	public function postPeople() {
		$number = Request::input('number');
		$birthday = Request::input('birthday');
		$profile = Request::input('profile');
		$birthdays = array();
		$profiles = array();
		if($birthday) {
			$birthdays = $this->getBirthdays($number);
		}
		if($profile) {
			$profiles = $this->getProfiles($number);
		}
                $names = $this->getNames($number);
		return view('resultsPeople')->with('names', $names, 'birthdays', $birthdays, 'birthday', $birthday, 'profiles', $profiles, 'profile', $profile);
	}
	public function getParagraphs($number) {
		$paragraphs = ["Hello", "World", "This is a paragraphs", "test", "abcdefg", "hijklmno", "pqrstu", "vwxyz"];
		$max = sizeof($paragraphs)-1;
		$paragraph_list = array();
		for($i = 0; $i < $number; $i++) {
			array_push($paragraph_list, $paragraphs[rand(0, $max)]);
		}
		return $paragraph_list;
	}
        
        public function getNames($number) {
            	$names = ["Alex Johnson", "Sally Williams", "Andy Turner", "Phil Stevens", "Bob James", "Tim Smith", "Wendy Jones", "Sarah Anderson", "Eric McCartney", "Peter Douglas"];
		$max = sizeof($names)-1;
		$names_list = array();
		for($i = 0; $i < $number; $i++) {
			array_push($names_list, $names[rand(0, $max)]);
		}
		return $names_list;
        }
        public function getBirthdays($number) {
            	$birthdays_list=array();
                for($i = 0; $i < $number; $i++) {
                    $month = rand(1, 12);
                    $year = rand(1900, 2015);
                    $day;
                    if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
                        $day = rand(1, 31);
                    } elseif($month == 4 || $month == 6 || $month == 9 || $month == 11) {
                        $day = rand(1, 30);
                    } else {
                        if($year % 4 == 0) {
                            $day = rand(1, 29);
                        } else {
                            $day = rand(1, 28);
                        }
                    }
		    array_push($birthdays_list, $month.'/'.$day.'/'.$year);
		}
		return $birthdays_list;
        }        
        public function getProfiles($number) {
            	$profiles = ["Checks if the specified key exists in the array", "Returns all the keys of an array", "Sends each value of an array to a user-made function, which returns new values", "Merges one or more arrays into one array", "Merges one or more arrays into one array recursively", "Sorts multiple or multi-dimensional arrays", "Inserts a specified number of items, with a specified value, to an array", "Deletes the last element of an array", "Calculates the product of the values in an array", "Inserts one or more elements to the end of an array", "Returns one or more random keys from an array", "Returns an array as a string, using a user-defined function", "Replaces the values of the first array with the values from following arrays", "Replaces the values of the first array with the values from following arrays recursively"];                                            
		$max = sizeof($profiles)-1;
		$profiles_list = array();
		for($i = 0; $i < $number; $i++) {
			array_push($profiles_list, $profiles[rand(0, $max)]);
		}
		return $profiles_list;
        }        
}