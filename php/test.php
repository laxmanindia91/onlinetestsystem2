
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

    <div id="demo-top-bar">

  <div id="demo-bar-inside">

    <h2 id="demo-bar-badge">
      <a href="/">CSS-Tricks Example</a>
    </h2>

    <div id="demo-bar-buttons">
          </div>

  </div>

</div>
	<div id="page-wrap">

		<h1>Final Quiz for Dorkitude</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>CSS Stands for...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Computer Styled Sections </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Internet Explorer 6 was released in...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 2001</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1998</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 2006</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 2003</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>SEO Stand for...</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Secret Enterprise Organizations</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Special Endowment Opportunity</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Search Engine Optimization</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Seals End Olives</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>A 404 Error...</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) is an HTTP Status Code meaning Page Not Found</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) is a good excuse for a clever design</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) should be monitored for in web analytics</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) All of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Your favorite website is</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) CSS-Tricks</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	
	 <style type="text/css" style="display: none !important;">
	* {
		margin: 0;
		padding: 0;
	}
	body {
		overflow-x: hidden;
	}
	#demo-top-bar {
		text-align: left;
		background: #222;
		position: relative;
		zoom: 1;
		width: 100% !important;
		z-index: 6000;
		padding: 20px 0 20px;
	}
	#demo-bar-inside {
		width: 960px;
		margin: 0 auto;
		position: relative;
		overflow: hidden;
	}
	#demo-bar-buttons {
		padding-top: 10px;
		float: right;
	}
	#demo-bar-buttons a {
		font-size: 12px;
		margin-left: 20px;
		color: white;
		margin: 2px 0;
		text-decoration: none;
		font: 14px "Lucida Grande", Sans-Serif !important;
	}
	#demo-bar-buttons a:hover,
	#demo-bar-buttons a:focus {
		text-decoration: underline;
	}
	#demo-bar-badge {
		display: inline-block;
		width: 302px;
		padding: 0 !important;
		margin: 0 !important;
		background-color: transparent !important;
	}
	#demo-bar-badge a {
		display: block;
		width: 100%;
		height: 38px;
		border-radius: 0;
		bottom: auto;
		margin: 0;
		background: url(/images/examples-logo.png) no-repeat;
		background-size: 100%;
		overflow: hidden;
		text-indent: -9999px;
	}
	#demo-bar-badge:before, #demo-bar-badge:after {
		display: none !important;
	}
</style>
</body>

</html>