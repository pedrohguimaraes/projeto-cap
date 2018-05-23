<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use App\Models\Course;

class CourseController extends Controller{

    public function index(){

        // Lista de cursos
        $query = Course::orderBy('id', 'desc')
            ->join('category', 'course.category_id', 'category.id')
            ->join('address', 'course.address_id', 'address.id')
            ->select('course.title', 'date_format(course.start, "%d%m%Y") as date','category.name as category', 'address.city');

            if(Input::has('search')){
                $query->where('course.title', 'like', '%'.Input::get('search').'%');
            } 

            $courses = $query->get();

        //dd($courses);

        return view('lista', compact('courses'));
    }
   
    public function show($id){

        $course = Course::find($id);
        $course->consultant;
        $course->address;
        $course->category;

        // Formação de data e hora
        $dtStart = new DateTime($course['start']);
        $dtFinish = new DateTime($course['finish']);
        $course['start'] = $dtStart->format('d/m/Y') ;
        $course['schedule_start'] = $dtStart->format('H:i:s');
        $course['schedule_finish'] = $dtFinish->format('H:i:s');

        return view('details',compact('course'));
        
    }

    
}
