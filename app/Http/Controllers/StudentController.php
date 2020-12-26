<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = $this->getAllStudent();
        return view('trainees.TraineesPage', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Student = $this->getAllStudent()[$id];
        return   view('trainees.showtrainee')->with('Student', $Student);
    }


    // public function showAttendance()
    // {
    //     $Student = $this->getAllStudent();
    //     return   view('trainees.att')->with('Student', $Student);
    // }

    public function index2()
    {
        $Students = $this->getAllStudent();
        return view('trainees.att', compact('Students'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllStudent()
    {
        return [
            [
                'id' => '0',
                'name' => 'Osama',
                'birthday' => '19 October',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 20:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 18:00',
                    ],
                ],
            ],
            [
                'id' => '1',
                'name' => 'Hamzah',
                'birthday' => '29 May',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 14:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 18:00',
                    ],
                ],
            ],
            [
                'id' => '2',
                'name' => 'Jacoub',
                'birthday' => '16 November',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 12:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 12:00',
                    ],
                ],
            ],
            [
                'id' => '3',
                'name' => 'Firas',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 19:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '4',
                'name' => 'Lojain',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 16:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '5',
                'name' => 'Lana',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 16:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '6',
                'name' => 'Koko',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 16:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '7',
                'name' => 'Dania',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 18:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 20:00',
                    ],
                ],
            ],
            [
                'id' => '8',
                'name' => 'Shatnawi',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 16:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '9',
                'name' => 'Aboromman',
                'birthday' => '14 June',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => 'yes',
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => 'no',
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 18:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 20:00',
                    ],
                ],
            ],
        ];
    }
}
