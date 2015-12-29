/**
 * myscript.js
 *
 * Computer Science 50
 * Final Project
 * Adarsh Suresh
 *
 * Global JavaScript, if any.
 */

// use this for actual 
/*
 document.logOn.onsubmit=validate;

   function validate(){
        var name=document.logOn.pw.value;
        var name1=document.logOn.userName.value;
        var test = new RegExp("[a]");
        var test1 = new RegExp("[A]");
        if((!name.match(test) && !name.match(test1)) || (!name1.match(test) && !name1.match(test1))){              
           alert("Your Password Cant Have any thing other than a-zA-Z0-9!@#$%^*_| - Play It                     Straight!");
        return false;
  }               
   return true;
}
*/

// have input text fit div
// resize on window change
$(window).bind("resize", function(){
    fitInput();
    footerWidth();
    square();
    middle();
    
});
// resize after loading
$(document).ready(function(){
   fitInput();
   footerWidth();
   square();
   middle();
    
});
// function
function fitInput(){
    var divW = $('.parent-1').width();
    $('.parent1').width(divW);
    var divH = $('.parent-1').height();
    $('.parent1').height(divH);
}

// function
function footerWidth(){
    var htmlWidth= $('html').width();
    $('footer').width(htmlWidth);
}

// function for making punnet squares
function square(){
    var divW = $('.offspringResultBorder').width();
    $('.offspringResultBorder').height(divW);
}

// function for placing allele pairs in middle of each square
function middle(){
    var divH = $('.offspringResultBorder').height();
    var margin = divH/2;
    $('.offspringResultBorder h2').css('margin-top', margin);
}

function adrs() {
                $('#adrs-txt').css('display', 'block');
                $('#intro-txt').css('display', 'none');
                $('#genes-txt').css('display', 'none');
                $('#cs50-txt').css('display', 'none');
};

function genes() {
                $('#adrs-txt').css('display', 'none');
                $('#intro-txt').css('display', 'none');
                $('#genes-txt').css('display', 'block');
                $('#cs50-txt').css('display', 'none');
};
function cs50() {
                $('#adrs-txt').css('display', 'none');
                $('#intro-txt').css('display', 'none');
                $('#genes-txt').css('display', 'none');
                $('#cs50-txt').css('display', 'block');
};

// prevents form from submitting if not valid

$(document).ready(function() {
	$('#offspring').submit(function() {
		if ($('.allelesNotValid').css('display') == 'block') {
			alert("The allele combinations are not valid!")
			return false;
		} else {
			return true;
		}
	});
});

/*-------------------------------------------------offspringProbability----------------------------------------------*/

// change phenotype options based off of inheritance type
$('select#inhrtType').change(function(){
    var target = $(this).data('target');
    $(target).children().addClass('hide');
    var show = $("option:selected", this).data('show');
    $(show).removeClass('hide');
});

$(document).ready(function () {
    $('.allelesNotValid').hide();
    $("#dAl").change(function () {
        regAllele();
    });
    $("#rAl").change(function () {
        regAllele();
    });
    $("#al1").change(function () {
        incmpltAllele();
    });
    $("#al2").change(function () {
        incmpltAllele();
    });
    $("#coAl1").change(function () {
        coAllele();
    });
    $("#coAl2").change(function () {
        coAllele();
    });
    $("#coRAl").change(function () {
        coAllele();
    });
    $("#parent1-1").change(function () {
        if ($('#inhrtType').val() == "reg") 
            regAllele();
        if ($('#inhrtType').val() == "incmplt") 
            incmpltAllele();
        if ($('#inhrtType').val() == "co") 
            coAllele();
    });
    $("#parent1-2").change(function () {
        if ($('#inhrtType').val() == "reg") 
            regAllele();
        if ($('#inhrtType').val() == "incmplt") 
            incmpltAllele();
        if ($('#inhrtType').val() == "co") 
            coAllele();
    });
    $("#parent2-1").change(function () {
        if ($('#inhrtType').val() == "reg") 
            regAllele();
        if ($('#inhrtType').val() == "incmplt") 
            incmpltAllele();
        if ($('#inhrtType').val() == "co") 
            coAllele();
    });
            $("#parent2-2").change(function () {
        if ($('#inhrtType').val() == "reg") 
            regAllele();
        if ($('#inhrtType').val() == "incmplt") 
            incmpltAllele();
        if ($('#inhrtType').val() == "co") 
            coAllele();
    });

});
        
// function for checking if alleles are valid
function regAllele() {
    if (($('#parent1-1').val() != $('#dAl').val() && $('#parent1-1').val() != $('#rAl').val()) || ($('#parent1-2').val() != $('#dAl').val() && $('#parent1-2').val() != $('#rAl').val()) || ($('#parent2-1').val() != $('#dAl').val() && $('#parent2-1').val() != $('#rAl').val()) || ($('#parent2-2').val() != $('#dAl').val() && $('#parent2-2').val() != $('#rAl').val()) || $('#dAl').val() == $('#rAl').val() || $('#rAl').val() == $('#dAl').val()) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
function incmpltAllele() {
    if (($('#parent1-1').val() != $('#al1').val() && $('#parent1-1').val() != $('#al2').val()) || ($('#parent1-2').val() != $('#al1').val() && $('#parent1-2').val() != $('#al2').val()) || ($('#parent2-1').val() != $('#al1').val() && $('#parent2-1').val() != $('#al2').val()) || ($('#parent2-2').val() != $('#al1').val() && $('#parent2-2').val() != $('#al2').val()) || $('#al1').val() == $('#al2').val() || $('#al2').val() == $('#al1').val()) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
function coAllele() {
            if (($('#parent1-1').val() != $('#coAl1').val() && $('#parent1-1').val() != $('#coAl2').val() && $('#parent1-1').val() != $('#coRAl').val()) || ($('#parent1-2').val() != $('#coAl1').val() && $('#parent1-2').val() != $('#coAl2').val() && $('#parent1-2').val() != $('#coRAl').val()) || ($('#parent2-1').val() != $('#coAl1').val() && $('#parent2-1').val() != $('#coAl2').val() && $('#parent2-1').val() != $('#coRAl').val()) || ($('#parent2-2').val() != $('#coAl1').val() && $('#parent2-2').val() != $('#coAl2').val() && $('#parent2-2').val() != $('#coRAl').val()) || ($('#coAl1').val() == ($('#coAl2').val() || $('#coRAl').val())) || ($('#coAl2').val() == ($('#coAl1').val() || $('#coRAl').val())) || ($('#coRAl').val() == ($('#coAl2').val() || $('#coAl1').val()))) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
/*-------------------------------------------------spouseProbability-------------------------------------------------*/

// change phenotype options based off of inheritance type
$('select#sinhrtType').change(function(){
    var target = $(this).data('target');
    $(target).children().addClass('hide');
    var show = $("option:selected", this).data('show');
    $(show).removeClass('hide');
});

$(document).ready(function () {
    $('.allelesNotValid').hide();
    $("#sdAl").change(function () {
        sregAllele();
    });
    $("#srAl").change(function () {
        sregAllele();
    });
    $("#sal1").change(function () {
        sincmpltAllele();
    });
    $("#sal2").change(function () {
        sincmpltAllele();
    });
    $("#scoAl1").change(function () {
        scoAllele();
    });
    $("#scoAl2").change(function () {
        scoAllele();
    });
    $("#scoRAl").change(function () {
        scoAllele();
    });
    $("#parent-1").change(function () {
        if ($('#sinhrtType').val() == "reg") 
            sregAllele();
        if ($('#sinhrtType').val() == "incmplt") 
            sincmpltAllele();
        if ($('#sinhrtType').val() == "co") 
            scoAllele();
    });
    $("#parent-2").change(function () {
        if ($('#sinhrtType').val() == "reg") 
            sregAllele();
        if ($('#sinhrtType').val() == "incmplt") 
            sincmpltAllele();
        if ($('#sinhrtType').val() == "co") 
            scoAllele();
    });
    $("#child-1").change(function () {
        if ($('#sinhrtType').val() == "reg") 
            sregAllele();
        if ($('#sinhrtType').val() == "incmplt") 
            sincmpltAllele();
        if ($('#sinhrtType').val() == "co") 
            scoAllele();
    });
    $("#child-2").change(function () {
        if ($('#sinhrtType').val() == "reg") 
            sregAllele();
        if ($('#sinhrtType').val() == "incmplt") 
            sincmpltAllele();
        if ($('#sinhrtType').val() == "co") 
            scoAllele();
    });

});
        
// function for checking if alleles are valid
function sregAllele() {
    if (($('#parent-1').val() != $('#sdAl').val() && $('#parent-1').val() != $('#srAl').val()) || ($('#parent-2').val() != $('#sdAl').val() && $('#parent-2').val() != $('#srAl').val()) || ($('#child-1').val() != $('#sdAl').val() && $('#child-1').val() != $('#srAl').val()) || ($('#child-2').val() != $('#sdAl').val() && $('#child-2').val() != $('#srAl').val()) || $('#sdAl').val() == $('#srAl').val() || $('#srAl').val() == $('#sdAl').val()) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
function sincmpltAllele() {
    if (($('#parent-1').val() != $('#sal1').val() && $('#parent-1').val() != $('#sal2').val()) || ($('#parent-2').val() != $('#sal1').val() && $('#parent-2').val() != $('#sal2').val()) || ($('#child-1').val() != $('#sal1').val() && $('#child-1').val() != $('#sal2').val()) || ($('#child-2').val() != $('#sal1').val() && $('#child-2').val() != $('#sal2').val()) || $('#sal1').val() == $('#sal2').val() || $('#sal2').val() == $('#sal1').val()) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
function scoAllele() {
            if (($('#parent-1').val() != $('#scoAl1').val() && $('#parent-1').val() != $('#scoAl2').val() && $('#parent-1').val() != $('#scoRAl').val()) || ($('#parent-2').val() != $('#scoAl1').val() && $('#parent-2').val() != $('#scoAl2').val() && $('#parent-2').val() != $('#coRAl').val()) || ($('#child-1').val() != $('#scoAl1').val() && $('#child-1').val() != $('#scoAl2').val() && $('#child-1').val() != $('#scoRAl').val()) || ($('#child-2').val() != $('#scoAl1').val() && $('#child-2').val() != $('#scoAl2').val() && $('#child-2').val() != $('#scoRAl').val()) || ($('#scoAl1').val() == ($('#scoAl2').val() || $('#scoRAl').val())) || ($('#scoAl2').val() == ($('#scoAl1').val() || $('#scoRAl').val())) || ($('#coRAl').val() == ($('#scoAl2').val() || $('#scoAl1').val()))) {
        $('.allelesNotValid').show();
    } else {
        $('.allelesNotValid').hide();   
    }
}
