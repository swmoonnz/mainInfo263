//error handling function + test in line 10
onerror = errorHandler;
         function errorHandler(message, link, line) {
             message = "Error Encountered:\n\n";
             message += "URL: " + link + "\n";
             message += "Line: " + line + "\n";
             alert(message);
             return true;
         }
