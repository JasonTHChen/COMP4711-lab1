<?php
/**
 * Description of Student
 *
 * @author Jason
 */
class Student {
    /**
     * initialize the student fields
     */
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Add email
     * @param which - email for different purpose
     * @param address - address of email
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /**
     * Add grade
     * @param grade grade of a course
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculate grades average
     * @return average - average of the grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    /**
     * Print the student details
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }

        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
