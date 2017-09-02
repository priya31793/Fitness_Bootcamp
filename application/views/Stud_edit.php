<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 		
       <?php 
            echo form_open('Stud_controller/update_student'); 
            echo form_hidden(array('id'=>$records[0]->id)); 
            echo form_label('Roll No.'); 
            			echo form_input(array('id'=>'email','name'=>'email','value'=>$records[0]->email)); 
            echo "<br/>";
            echo form_label('Name'); 
            			echo form_input(array('id'=>'name','name'=>'name','value'=>$records[0]->name)); 
			echo "<br/>";
			echo form_label('Address'); 
						echo form_input(array('id'=>'address','name'=>'address','value'=>$records[0]->address));
			echo "<br/>";
			echo form_label('City'); 
						echo form_input(array('id'=>'city','name'=>'city','value'=>$records[0]->city)); 
			echo "<br/>";
			echo form_label('State'); 
						echo form_input(array('id'=>'state','name'=>'state','value'=>$records[0]->state)); 
			echo "<br/>";
			echo form_submit(array('id'=>'submit','value'=>'Edit')); 
			echo form_close();
         ?> 	
   </body>
	
</html>