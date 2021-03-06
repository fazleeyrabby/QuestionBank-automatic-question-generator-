<?php
/**
 * Created by PhpStorm.
 * User: Jakarea
 * Date: 7/27/2016
 * Time: 2:40 PM
 */
?>

@extends('admin.layout')
@section('content')
<br>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New question</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {!! Form::open(['route' => ['question.update',$question->question_id],'class' => 'form-horizontal','method' => 'PUT']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Course Title',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title',$question->course['title'],array('class' => 'form-control', 'placeholder' => 'eg: Algorithom')) !!}
                                {!! Form::hidden('course_id',$question->course['course_id'],array('id' => 'course_id')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('question', 'Question',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('question',$question->question,array('class' => 'form-control', 'placeholder' => 'eg: What is your name?','rows'=>'3')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('mark', 'Mark',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                                {!! Form::text('mark',$question->mark,array('class' => 'form-control', 'placeholder' => 'eg: 10')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('exam_type', 'Exam Type',array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-sm-10">
                            <?php $selecte = "true";?>
                                {!! Form::label('exam_type', 'Final',array('class'=>'control-label')) !!}
                                <input type="radio" name="exam_type" value="Mid" <?php if($question->exam_type == "Mid") echo "checked";?>>
                                {!! Form::label('exam_type', 'Mid','required',array('class'=>'control-label')) !!}
                                <input type="radio" name="exam_type" value="Final" <?php if($question->exam_type == "Final") echo "checked";?>>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                {!! Form::close() !!}
            </div>
            <!-- /.box -->
                <!-- /.box-body -->
        </div>
            <!-- /.box -->
    </div>

@endsection
