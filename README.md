# humancoder
Wrapper php para comunicação com humancoder

# Install
$ composer require andersonol/humancoder

# Get Started
https://humancoder.com

# Examples

Para revelar captcha com base64:
```php
    require_once('../../vendor/autoload.php');

    try{

        $accessKey     = 'YOUR-ACCESS-KEY';
        $captchaBase64 = 'iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABf6SURBVHhe1Z1XyF1VFsc/NBYkxhJ7SSyxRBRsaOy9YImixt57sPeuUceGFQuOOuKoAQsWRIOjBhyNKCqMRh9U5iGRGdA3GeYhMPNw5v62/i/rrm/tffYtcfQPi+/ec/bZe+21/2vttfc5535jkydPXjg2NtZ4WW655f6z4oorLpk0adK/pk2bthg54IADPj3rrLP+Mnv27HlPPPHEn5GffvrpD03TzInk448/fogyDz744NxZs2b9debMmQs69SyaMGHCf317EydO/Pc+++zz+fPPP/+nqK6cfP311/fRBnpx/dSpU//h65bQn+nTp//95JNPnt9vO6+99tofucb2+fvvv7+b7/z15fuVQesapQ6/V9HY8HlsypQp/4wG/9eQddZZpzn//POb999/v+mQpHnhhReazz77rKNXOyjPdYsXL06fPT755JPmzjvvbPbdd99mrbXWCtvvELw5+OCDm7vuuiuV96DeH374oXn77bd7rqP8kiVLmg8//LC55ZZbsteqX8KiRYuab7755pdvvfjiiy+ydZXAdTfccEPz2GOPpfZ+/PHH0B6/Z2DrXJ/s2DzzzDPNWOfYHC7gxKWXXtpsuOGGPYMnWXbZZYna4bk2WWaZZZpVV121WX311Zvdd9+9Oe6449LgMQAI7b/44ovd8q+//vrP2hYgAjz33HPpcwSVeeqppxKZ6PChhx7ao5sVCH744Yc3F1xwQfPss88mknA9+t17773Naaed1pxwwgnNRx99lOriXA6eoHxXOzX9qwX9mjdvXmoLeeCBB0K95JxC5HAWvvzSBvbJOTP28n1SWcamkwGkIIPOidDpjAEdIVqefvrpKYraQUcY+M703lx22WVNZ7rrGvPII49s9t5772ajjTYad00/svnmmzfXXnttqvPxxx/vEn8QcB11QkAgA3TSp3Scfmy55ZY97UtWW2215ADYYsGCBd1+3nrrrc0RRxyRPteCQVG99CkH9MuRzMM6ydy5c9O4WUcTad98883mySef7NE3cjhLKPrYSeN++TY8SoS1Ufaaa64Z138CC8cFP6ZCskfn7zhCezBNQgKmZzVsBUIQ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';
    
        $captcha = \Humancoder\CaptchaBase64::execute($accessKey, $captchaBase64);
    
        echo "captcha: $captcha \n";
    }
    catch(\Exception $e){

        throw $e;
    }
```

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

## License
Copyright (c) 2018 Anderson Leite

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.