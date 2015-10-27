$(document).ready(function()
{
	hrf = window.location.href;
	if ((hrf.search("gallery") == -1) && (hrf.search("photo") == -1))
	 	{$("#photobutton").hide(); }
	else
		{ $("#photobutton").show(); }
		
	if  (hrf.search("activities") == -1)
	 	{$("#activitybutton").hide();	}
	else
		{ $("#activitybutton").show(); 	}
	$("#homepage").mouseover(function()
	    {$("#activitybutton").hide();
	    $("#photobutton").hide();   });
	$("#map").mouseover(function()
	    {$("#activitybutton").hide();
	    $("#photobutton").hide(); });
	 $("#aboutus").mouseover(function()
	   {$("#activitybutton").hide();
	   	$("#photobutton").hide();   });
	$("#news").mouseover(function()
	   {$("#activitybutton").hide();
	   $("#photobutton").hide();   });
	$("#newsletters").mouseover(function()
	  {$("#activitybutton").hide();
	   $("#photobutton").hide();  });
     $("#links").mouseover(function()
	  {$("#activitybutton").hide();
	   $("#photobutton").hide();  });
	$("#fundraising").mouseover(function()
	  {$("#activitybutton").hide();
	  $("#photobutton").hide();   });
	 $("#volunteering").mouseover(function()
	  { $("#activitybutton").hide();
	  $("#photobutton").hide();   });
  $("#committee").mouseover(function()
	 { $("#activitybutton").hide();
	  $("#photobutton").hide();   });
  $("#contact").mouseover(function()
	{$("#activitybutton").hide();
	$("#photobutton").hide();	 });
  $("#activities").mouseover(function()
	    {$("#activitybutton").show(); 
		$("#photobutton").hide();});
   $("#photobutton").mouseover(function()
	 {$("#photobutton").show(); 
     $("#activitybutton").hide();});
	$("#photos").mouseover(function()
	 {$("#photobutton").show(); 
	 $("#activitybutton").hide(); });
}); 