function myfunction() {
for(var i =1;i<=26;i++){
  if(document.getElementById('valider_no'+i))
    document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
  if(document.getElementById('valider_yes'+i))
    document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  if(document.getElementById('trr_no'+i))
    document.getElementById('trr_no'+i).style.display = "none";
  if(document.getElementById('trr_yes'+i))
    document.getElementById('trr_yes'+i).style.display = "none";
}
for(var j=2;j<=26;j++)
{
  if(document.getElementById('trr'+j))
    document.getElementById('trr'+j).style.display = "none";
}   
}

function functionAlert_yes(y){
 document.getElementById('valider_no'+y).style.backgroundColor = '#928CB2';
 for(var i =1;i<=26;i++){
  if(document.getElementById('trr_no'+i))
    document.getElementById('trr_no'+i).style.display = "none";
  if(document.getElementById('trr_yes'+i))
    document.getElementById('trr_yes'+i).style.display = "none";
 }
 for(var i =y+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  document.getElementById('valider_yes'+y).style.backgroundColor = '#FF6B71';
  document.getElementById('trr_yes'+y).style.display = "block";
}


function functionAlert_no(z){
  document.getElementById('valider_yes'+z).style.backgroundColor = '#928CB2';
  for(var i =1;i<=26;i++){
    if(document.getElementById('trr_no'+i))
        document.getElementById('trr_no'+i).style.display = "none";
    if(document.getElementById('trr_yes'+i))
        document.getElementById('trr_yes'+i).style.display = "none";
 }
 for(var i =z+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  document.getElementById('valider_no'+z).style.backgroundColor = '#FF6B71';
  document.getElementById('trr_no'+z).style.display = "block";
}


function next_yes(x,p){
  document.getElementById('valider_no'+p).style.backgroundColor = '#928CB2'
  document.getElementById('valider_yes'+p).style.backgroundColor = '#FF6B71';
  for(var i =1;i<=26;i++){
    if(document.getElementById('trr_no'+i))
        document.getElementById('trr_no'+i).style.display = "none";
    if(document.getElementById('trr_yes'+i))
        document.getElementById('trr_yes'+i).style.display = "none";
 }
  for(var i =p+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  document.getElementById('trr'+x).style.display = "table";
  document.getElementById('trr'+x).style.width = "100%";
}


function next_no(w,q){
  document.getElementById('valider_yes'+q).style.backgroundColor = '#928CB2'
  document.getElementById('valider_no'+q).style.backgroundColor = '#FF6B71';
  for(var i =1;i<=26;i++){
    if(document.getElementById('trr_no'+i))
        document.getElementById('trr_no'+i).style.display = "none";
    if(document.getElementById('trr_yes'+i))
        document.getElementById('trr_yes'+i).style.display = "none";
 }
    for(var i =q+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  document.getElementById('trr'+w).style.display = "table";
  document.getElementById('trr'+w).style.width = "100%";
}

function next_yes1(x,p,z){
  document.getElementById('valider_no'+p).style.backgroundColor = '#928CB2'
  document.getElementById('valider_yes'+p).style.backgroundColor = '#FF6B71';
  for(var i =1;i<=26;i++){
    if(document.getElementById('trr_no'+i))
        document.getElementById('trr_no'+i).style.display = "none";
    if(document.getElementById('trr_yes'+i))
        document.getElementById('trr_yes'+i).style.display = "none";
 }
  for(var i =p+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  if(z==100)
  {
    //do nothing
  }
  else if(document.getElementById('trr'+z))
  {
    document.getElementById('trr'+z).style.display = "none";
  }
  document.getElementById('trr'+x).style.display = "table";
  document.getElementById('trr'+x).style.width = "100%";
}


function next_no1(w,q,z){
  document.getElementById('valider_yes'+q).style.backgroundColor = '#928CB2'
  document.getElementById('valider_no'+q).style.backgroundColor = '#FF6B71';
  for(var i =1;i<=26;i++){
    if(document.getElementById('trr_no'+i))
        document.getElementById('trr_no'+i).style.display = "none";
    if(document.getElementById('trr_yes'+i))
        document.getElementById('trr_yes'+i).style.display = "none";
 }
    for(var i =q+1;i<=26;i++)
  {
    if(document.getElementById('trr'+i))
      document.getElementById('trr'+i).style.display = "none";
    if(document.getElementById('valider_no'+i))
      document.getElementById('valider_no'+i).style.backgroundColor = '#928CB2';
    if(document.getElementById('valider_yes'+i))
      document.getElementById('valider_yes'+i).style.backgroundColor = '#928CB2';
  }
  if(z==100)
  {
    //do nothing
  }
  else if(document.getElementById('trr'+z))
  {
    document.getElementById('trr'+z).style.display = "none";
  }
  document.getElementById('trr'+w).style.display = "table";
  document.getElementById('trr'+w).style.width = "100%";
}

var modal=[];
var span = [];
for(var i=0;i<=26;i++){
modal[i] = document.getElementById("myModal"+i);
span[i] = document.getElementById("closed"+i);
// Get the button that opens the modal
}
// Get the <span> element that closes the modal


function popup(x){
// When the user clicks the button, open the modal 
  modal[x].style.display = "block";
  

// When the user clicks on <span> (x), close the modal
span[x].onclick = function() {
  modal[x].style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal[x]) {
    modal[x].style.display = "none";
  }
}
}