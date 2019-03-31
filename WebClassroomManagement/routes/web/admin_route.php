<?php


Route::group(['middleware' => 'is_admin'], function () {
    Route::get('/admin/dashboard','Admin\DashboardController@index')->name('admin.dashboard');

    Route::get('/admin/profile','Admin\ProfileController@index')->name('admin.profile');
    Route::get('/admin/profile/edit','Admin\ProfileController@edit')->name('admin.profile.edit');

    Route::get('/admin/user/student','Admin\UserController@studentUser')->name('admin.user.student');
    Route::get('/admin/user/student/{id}','Admin\UserController@sid')->name('admin.sid');
    Route::get('/admin/user/student/{id}/sroom','Admin\UserController@sroom')->name('admin.sid.sroom');
    Route::get('/admin/user/student/{id}/sroom/open_room','Admin\UserController@opensroom')->name('admin.sid.opensroom');
    Route::get('/admin/user/student/{id}/sroom/unreserve_room','Admin\UserController@unreserves')->name('admin.sid.unreserves');

    Route::get('/admin/user/student/{id}/add_token','Admin\UserController@addstoken')->name('admin.addstoken');
    Route::get('/admin/user/student/{id}/edit','Admin\UserController@sedit')->name('admin.sedit');
    Route::get('/admin/user/student/{id}/add_token2','Admin\UserController@addstoken2')->name('admin.addstoken2');

    Route::get('/admin/user/teacher','Admin\UserController@teacherUser')->name('admin.user.teacher');
    Route::get('/admin/user/teacher/{id}','Admin\UserController@tid')->name('admin.tid');
    Route::get('/admin/user/teacher/{id}/edit','Admin\UserController@tedit')->name('admin.tedit');
    Route::get('/admin/user/teacher/{id}/troom','Admin\UserController@troom')->name('admin.tid.troom');
    Route::get('/admin/user/student/{id}/troom/open_room','Admin\UserController@opentroom')->name('admin.tid.opentroom');
    Route::get('/admin/user/student/{id}/troom/unreserve_room','Admin\UserController@unreservet')->name('admin.tid.unreservet');

    Route::get('/admin/classroom/student_room','Admin\ClassroomController@studentRoom')->name('admin.classroom.student');
    Route::get('/admin/classroom/student/{room}','Admin\ClassroomController@acalendar')->name('admin.acalendar');
    Route::get('/admin/classroom/{room}/close','Admin\ClassroomController@close')->name('admin.close');
    Route::get('/admin/classroom/add','Admin\ClassroomController@add')->name('admin.add');
    Route::get('/admin/classroom/confirm','Admin\ClassroomController@confirm')->name('admin.confirm');

    Route::get('/admin/history','Admin\HistoryController@index')->name('admin.history');

    Route::get('/admin/classroom/teacher_room','Admin\ClassroomController@teacherRoom')->name('admin.classroom.teacher');
    Route::get('/admin/classroom/teacher_and_student_room','Admin\ClassroomController@ts')->name('admin.classroom.ts');


    Route::get('/admin/dashboard/register','Admin\UserController@registerPage')->name('admin.dashboard.register');
    Route::post('admin//dashboard/register/store', 'Admin\UserController@registerStore')->name('admin.dashboard.register.store');
    Route::get('/admin/dashboard/list', 'Admin\UserController@listPage')->name('admin.dashboard.list');
    Route::get('/admin/dashboard/list/teacher', 'Admin\UserController@teacherListPage')->name('admin.dashboard.list.teacher');
    Route::get('/admin/dashboard/list/student', 'Admin\UserController@studentListPage')->name('admin.dashboard.list.student');
    Route::get('/admin/dashboard/list/teacher/{id}', 'Admin\UserController@teacherInfo')->name('admin.dashboard.list.teacher.info');
    Route::get('/admin/dashboard/list/student/{id}', 'Admin\UserController@studentInfo')->name('admin.dashboard.list.student.info');
    Route::get('/admin/classroom/create','Admin\ClassroomController@createPage')->name('admin.classroom.create');
    Route::post('/admin/classroom/create/store', 'Admin\ClassroomController@createStore')->name('admin.classroom.create.store');
    Route::get('/admin/classroom/list', 'Admin\ClassroomController@listPage')->name('admin.classroom.list');
    Route::get('/admin/classroom/list/teacher_room', 'Admin\ClassroomController@teacherRoomPage')->name('admin.classroom.list.teacher_room');
    Route::get('/admin/classroom/list/student_room', 'Admin\ClassroomController@studentRoomPage')->name('admin.classroom.list.student_room');
    Route::get('/admin/classroom/list/teacher_and_student_room', 'Admin\ClassroomController@teacherAndStudentRoomPage')->name('admin.classroom.list.teacher_and_student_room');
    Route::get('/admin/classroom/list/teacher_room/{room}', 'Admin\ClassroomController@teacherRoomInfo')->name('admin.classroom.list.teacher_room.info');
    Route::get('/admin/classroom/list/student_room/{room}', 'Admin\ClassroomController@studentRoomInfo')->name('admin.classroom.list.student_room.info');
    Route::get('/admin/classroom/list/teacher_and_student_room/{room}', 'Admin\ClassroomController@teacherAndStudentRoomInfo')->name('admin.classroom.list.teacher_and_student_room.info');
    Route::get('/admin/classroom/list/teacher_room/{room}/reserve', 'Admin\ClassroomController@teacherRoomReservePage')->name('admin.classroom.list.teacher_room.info.reserve');
    Route::get('/admin/classroom/list/student_room/{room}/reserve', 'Admin\ClassroomController@studentRoomReservePage')->name('admin.classroom.list.student_room.info.reserve');
    Route::get('/admin/classroom/list/teacher_room/{room}/reserve/{time}', 'Admin\ClassroomController@teacherRoomReserveTime')->name('admin.classroom.list.teacher_room.info.time');
    Route::get('/admin/classroom/list/student_room/{room}/reserve/{time}', 'Admin\ClassroomController@studentRoomReserveTime')->name('admin.classroom.list.student_room.info.time');
    Route::get('/admin/classroom/list/teacher_and_room/{room}/reserve', 'Admin\ClassroomController@teacherAndStudentRoomReservePage')->name('admin.classroom.list.teacher_and_student_room.info.reserve');
    Route::get('/admin/classroom/list/teacher_and_room/{room}/reserve/{time}', 'Admin\ClassroomController@teacherAndStudentRoomReserveTime')->name('admin.classroom.list.teacher_and_student_room.info.time');

});
