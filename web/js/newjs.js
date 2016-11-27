/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    
    var header = '';
    var title = '';
    var section1 = '';
    var section2 = '';
    var footer = '';
    var chosen_col = '#fff';
    
    var style = '<style>' + 
            '#section-1{min-height:350px;}'+
            '#section-2{min-height:350px;}'+
            '.footer{min-height:100px;}'+
            '.navbar{margin-bottom:0;}'+            
            '.navbar-nav{float:right;}';
    
    var foostyle = '';
    var fooprevstyle = '';
    
    $('#add-header').click(function(){
       
       header = 
        '<a class="navbar-brand" href="#">'+$('#comp-name').val()+'</a>'+
        '<ul class="nav navbar-nav">'+
            '<li class="nav-item active">'+
            '<a class="nav-link" href="'+$('#menu-1-href').val()+'">'+$('#menu-1').val()+'</a>'+
            '</li>'+
            '<li class="nav-item active">'+
             '<a class="nav-link" href="'+$('#menu-2-href').val()+'">'+$('#menu-2').val()+'</a>'+
         '</li>'+'<li class="nav-item active">'+
           '<a class="nav-link" href="'+$('#menu-3-href').val()+'">'+$('#menu-3').val()+'</a>'+
            '</li>'+'<li class="nav-item active">'+
              '<a class="nav-link" href="'+$('#menu-4-href').val()+'">'+$('#menu-4').val()+'</a>'+
         '</li>'+'<li class="nav-item active">'+
           '<a class="nav-link" href="'+$('#menu-5-href').val()+'">'+$('#menu-5').val()+'</a>'+
         '</li>'+    
        '</ul>';
        
    });
    
    $('#add-title').click(function(){
       
       title = '<h1>'+
        $('#big-title').val()+
        '</h1>';
        
    });
    
    $('#add-section1').click(function(){
       
       section1 = //'<section id="section-1">'+
        
        '<div class="row">'+
        
            '<div class="col-md-4">' +              
                '<h2>' +
                    $('#div-1-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-1').val() +
                '</p>' +
            '</div>' +
            
            '<div class="col-md-4">' +
                '<h2>' +
                    $('#div-2-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-2').val() +
                '</p>' +
            '</div>' +
            
            '<div class="col-md-4">' +
                '<h2>' +
                    $('#div-3-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-3').val() +
                '</p>' +
            '</div>' +
        
        '</div>'; //+
        
        //'</section>';
        
    });
    
    $('#add-section2').click(function(){
       
       section2 = //'<section id="section-2">'+
        
        '<div class="row">'+
        
            '<div class="col-md-4">' +              
                '<h2>' +
                    $('#div-4-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-4').val() +
                '</p>' +
            '</div>' +
            
            '<div class="col-md-4">' +
                '<h2>' +
                    $('#div-5-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-5').val() +
                '</p>' +
            '</div>' +
            
            '<div class="col-md-4">' +
                '<h2>' +
                    $('#div-6-header').val() +
                '</h2>' +   
                '<p>' +
                    $('#div-6').val() +
                '</p>' +
            '</div>' +
        
        '</div>';// +
        
       // '</section>';
        
    });
    
    $('#add-footer').click(function(){
       
       footer = '<div class="row">'+
          '<div class="col-md-6">' +
            '<span>' +
                $('#footer-copyright').val()+
            '</span>' +
          '</div>' +
          '<div class="col-md-6">' +
            '<span>' +
                $('#footer-add').val() +
            '</span>' +
          '</div>' +       
        '</div>';
        
    });
    
    $('#make').click(function(){
       
       var site = '<!DOCTYPE html>'+
          '<html>' +
            '<head>' +
                '<meta charset="UTF-8">' +              
                '<meta name="viewport" content="width=device-width, initial-scale=1">' + 
                '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">'+
                style + foostyle + '</style>' +
            '</head>' +     
            '<body>' + 
                '<nav class="navbar">'+
               '<div class="container">'+
                    //'<div class="row">' +                    
                     ///   '<div class="col-xs-12">' +
                            header +
                        '</div>' +
                    '</nav>'+
                    '<div class="container">' +
                    '<div id="titlerow" class="row">' +                    
                        '<div class="col-xs-12">' +
                            title +
                        '</div>' +
                    '</div>'+
                    '<div id="section-1" class="row">'+
                    '<div class="col-xs-12">'+
                    section1 +
                    '</div>'+
                    '</div>'+
                    '<div id="section-2" class="row">'+
                    '<div class="col-xs-12">'+
                    section2 +
                    '</div>'+
                    '</div>'+
                '</div>' +
                '<footer class="footer">' +
                    '<div class="container">'+
                        footer +
                    '</div>'+
                '</footer>' +
            '</body>' +            
        '</html>';        
        
        $('#output').text(site);
    });    
    
    $('.col-pick').click(function(){        
        
        chosen_col = $(this).css("background-color");        
        
    });
    
    $('#confirm-col').click(function(){
        
        var to_change = $('input[name=optcolor]:checked').attr('id');
        
         if(to_change == 'header-col')
         {             
            style +=  '.navbar {background-color:'+chosen_col+'}';                    
         }
         if(to_change == 'comp-col')
         {             
            style +=  '.navbar-brand {color:'+chosen_col+'}';                    
         }         
         if(to_change == 'header-links-col')
         {             
            style +=  '.navbar li {color:'+chosen_col+'}';                    
         }         
         if(to_change == 'big-title-col')
         {             
            style +=  '#titlerow {background-color:'+chosen_col+'}';                    
         }
         if(to_change == 'text-title-col')
         {             
            style +=  '#titlerow h1 {color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec1-col')
         {             
            style +=  '#section-1 {background-color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec1-titles-col')
         {             
            style +=  '#section-1 h2 {color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec1-texts-col')
         {             
            style +=  '#section-1 p {color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec2-col')
         {             
            style +=  '#section-2 {background-color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec2-titles-col')
         {             
            style +=  '#section-2 h2 {color:'+chosen_col+'}';                    
         }
         if(to_change == 'sec2-texts-col')
         {             
            style +=  '#section-2 p {color:'+chosen_col+'}';                    
         }        
         if(to_change == 'foot-col')
         {             
            foostyle +=  '.footer {background-color:'+chosen_col+'}';     
            fooprevstyle +='.fooprev {background-color:'+chosen_col+'}';    
         }
         if(to_change == 'foot-text-col')
         {             
            foostyle +=  '.footer {color:'+chosen_col+'}';  
            fooprevstyle +=  '.fooprev {color:'+chosen_col+'}';
         }
    });
    
    $('button').click(function(){
       
        var prev = style + fooprevstyle + '</style>' +
                    '<div class="row">' +                    
                        '<div class="col-xs-12 navbar">' +                        
                            header +
                        '</div>' +
                    '</div>'+
                    '<div id="titlerow" class="row">' +                    
                        '<div class="col-xs-12">' +
                            title +
                        '</div>' +
                    '</div>'+
                    '<div id="section-1" class="row">'+
                    section1 +
                    '</div>'+
                    '<div id="section-2" class="row">'+
                    section2 +
                    '</div>'+
                    '<div class="fooprev">' +
                        footer +
                    '</div>';
        
        $('#preview').empty();
        $('#preview').append(prev);
        
    });
    
});