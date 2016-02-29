<?php echo form_open('PlayerController/AddPlayer', "role='form'");


echo form_label('Naam van de speler: ');
 $data_name = array(
'name' => 'name',
'id' => 'nameid',
'placeholder' => 'Naam speler'
);
echo form_input($data_name);


echo form_submit('submit', 'Speler aanmaken');

echo form_close(); 
?>
