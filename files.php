<?php
// we can manipulate files also from php means we read them create them delte them in our system we have few mathods to do it 
// $read = readfile('selectdata.php') ; 
// echo $read; 


// by using it shows number og total characters read beacuse by default readfile() methods return the output of file on bufferstring
// readfile('error.log');



//we can create file pointers and there are many modes in that mainly are three which are r,w,a(read,write,) we use these in fopen() method
// $pointer = fopen("test.txt",'r');
// $content = fread($pointer,filesize('test.txt'));
// $content = fgets($pointer);
// echo fgets($pointer);
// echo fgets($pointer);

// read file line by line by using fgets() method which take file pointer as argument.
// while( $a = fgets($pointer)){
//     echo $a;
// }
// fclose($pointer);
// we can you use this fclose() method for the sequrity perpose 
// echo $content;
// we can use fgets() read the next line from the file.means it pickes up only one at a time from file and if there is no next line in file it returns False that means we can use while loop as well to get all the data by fgets function.


// read the file character by character we can do it by using fgetc() which also take file pointer a s argument.
// we will get only one character by line just below
// echo fgetc($pointer);
// while($a = fgetc($pointer)){
//     echo $a;
// }

// here by using the pointer we can do different oprations on file and manipulate according to our need





// read a file content untill "." occures
// while($a = fgetc($pointer)){
//     echo $a;
//     if($a == "."){
//         break;
//     }
// }



// w(write) mode this mode will create a new file if the name provided is not present in your directory if present i will empty the file.
// echo 'welcome to Write of file system in php';
// $pointer = fopen('test2.txt','w');
// fwrite($pointer,"write whatever you want to add in your file through the fwrite function by using file pointer through fopen function.And believe me its true!\n");
// fwrite($pointer,"this is another content\n");
// fwrite($pointer,"this is another content2\n");
// this fwrite function will write in the file whatever you will provide in this function and you can call it agin and again




// a(appending) mode we use the same fwrite() method is this mode as well and it appends the extra in th end of the file
// $pointer = fopen('test2.txt','a');
// fwrite($pointer,"this is the appended text\n");
// fwrite($pointer,"this is the appended text2\n");
$pointer = fopen('test.txt','w');
// echo fread($pointer,filesize("test.txt"));
// echo fwrite($pointer,"this is the new content in file");
// if(fclose($pointer)){
//     echo "file  closed";
// }else{
//     echo "file is still open";
// }