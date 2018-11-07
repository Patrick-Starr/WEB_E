<?php

namespace domain;

/**
 * @access private
 * @author andreas.martin
 */
class Courses {
	/**
	 * @AttributeType int
	 */
	private $id;
	/**
	 * @AttributeType Varchar
	 */
	private $course;
	/**
	 * @AttributeType Varchar
	 */
	private $link;
        
        /**
	 * @AttributeType int
	 */
        private $duration;
	/**
	 * @AttributeType date
         *
	 */
	private $start;
        
        /**
	 * @AttributeType Varchar
	 */
        
        private $form;
        
        /**
	 * @AttributeType String
	 */
        private $place;
        
        /**
	 * @AttributeType Date
	 */
        function getDuration() {
            return $this->duration;
        }

        function getStart() {
            return $this->start;
        }

        function getForm() {
            return $this->form;
        }

        function getCreated() {
            return $this->created;
        }

        function setDuration($duration) {
            $this->duration = $duration;
        }

        function setStart($start) {
            $this->start = $start;
        }

        function setForm($form) {
            $this->form = $form;
        }

        function setCreated($created) {
            $this->created = $created;
        }

                private $created;
	

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @access public
	 * @param int id
	 * @return void
	 * @ParamType id int
	 * @ReturnType void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @access public
	 * @return Varchar
	 * @ReturnType Varchar
	 */
	public function getCourse() {
		return $this->course;
	}

	/**
	 * @access public
	 * @param String name
	 * @return void
	 * @ParamType name String
	 * @ReturnType void
	 */
	public function setCourse($course) {
		$this->name = $name;
	}

        /**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
        
        public function getLink() {
		return $this->link;
	}

	/**
	 * @access public
	 * @param Varchar Link
	 * @return void
	 * @ParamType varchar link
	 * @ReturnType void
	 */
	public function setLink($link) {
		$this->link = $link;
	}
	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getplace() {
		return $this->place;
	}

	/**
	 * @access public
	 * @param String email
	 * @return void
	 * @ParamType email String
	 * @ReturnType void
	 */
	public function setplace($place) {
		$this->place = $place;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @access public
	 * @param String password
	 * @return void
	 * @ParamType password String
	 * @ReturnType void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	
}
?>
