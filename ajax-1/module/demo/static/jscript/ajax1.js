/* With the $Behavior namespace we can run code as soon as the page loads */
$Behavior.loadTest1 = function()
{
	/* We can write blocking code, this type of code will block execution
	 * of the script, for example an alert: */
	 alert('Once you press Ok I will send an Ajax request to the server');
	 
	 /* Ajax requests are non-blocking, so they are executed and the code
	  * after the ajax request continues running, without waiting for the
	  * ajax response: */
	  $.ajaxCall('blog.ajax1', 'var1=value1');
	  
	  /* This code next will be executed before the server returns anything 
	   * from the ajaxCall in line 11 */
	   $('#ajax1-div1').append('This comes before the ajax response');
}

/* The file /include/component/ajax/ajax.class.php has the function ajax1()
 * Every ajax function (the ones found in files ajax.class.php) output
 * javascript code. The function ajax1() outputs a call to this JS function
 * handleJson which decides what to do with the JSON code*/
function handleJson($jVals)
{
	/* $jVals is a JSON string, we can parse it into an object like this: */
	var oVals = JSON.parse($jVals);
	
	/* We can loop through this object now */
	for ( var i in oVals)
	{
		$('#ajax1-div1').append('<div>oVals[' + i + '] = ' + oVals[i] + '</div>');
	}
}