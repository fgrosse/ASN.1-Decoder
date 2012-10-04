<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ASN.1 Decoder</title>
  <meta name="description" content="A web page to decode any BER encoded data and display it nice and clearly to the user">
  <meta name="author" content="Friedrich Große">
  <link href="css/main.css" rel="stylesheet"/>  
  <link href="css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">ASN.1 Decoder</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="https://github.com/FGrosse/ASN.1-Decoder">Find me on GitHub</a></li>              
            </ul>            
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="hero-unit">
      	<h2>Input your Base64 encoded data here:</h2>
        <form action="index.php" method="post">	        
	        <textarea name='input' rows="16" class="span10" style="font-family: monospace; width: 799px;">
MIIDfjCCAuegAwIBAgIKZGgbPQAAAABnVTANBgkqhkiG9w0BAQUFADBGMQswCQYD
VQQGEwJVUzETMBEGA1UEChMKR29vZ2xlIEluYzEiMCAGA1UEAxMZR29vZ2xlIElu
dGVybmV0IEF1dGhvcml0eTAeFw0xMjA4MTYxMjI2MTlaFw0xMzA2MDcxOTQzMjda
MGcxCzAJBgNVBAYTAlVTMRMwEQYDVQQIEwpDYWxpZm9ybmlhMRYwFAYDVQQHEw1N
b3VudGFpbiBWaWV3MRMwEQYDVQQKEwpHb29nbGUgSW5jMRYwFAYDVQQDEw13d3cu
Z29vZ2xlLmRlMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDEoGt7UvjRfcHM
tHNixkq3marhniRadVnpzux9iqTfB8sLIf39djxjoxOmaP6ddk7ZE8UaZ2eI22Kv
Yk9CLC8RLBMWkiql03gjzZ9D0fxUUT0Usp42mR8IoELELqru5f6OLLEBZxdKNZzr
9vrMLJypM61AMTfuLD9MvtlGASnHKwIDAQABo4IBUDCCAUwwHQYDVR0lBBYwFAYI
KwYBBQUHAwEGCCsGAQUFBwMCMB0GA1UdDgQWBBS7E76yPlQGezzNghLX64dAkcH1
HTAfBgNVHSMEGDAWgBS/wDDr9UMRPme6npH7/Gra42sSJDBbBgNVHR8EVDBSMFCg
TqBMhkpodHRwOi8vd3d3LmdzdGF0aWMuY29tL0dvb2dsZUludGVybmV0QXV0aG9y
aXR5L0dvb2dsZUludGVybmV0QXV0aG9yaXR5LmNybDBmBggrBgEFBQcBAQRaMFgw
VgYIKwYBBQUHMAKGSmh0dHA6Ly93d3cuZ3N0YXRpYy5jb20vR29vZ2xlSW50ZXJu
ZXRBdXRob3JpdHkvR29vZ2xlSW50ZXJuZXRBdXRob3JpdHkuY3J0MAwGA1UdEwEB
/wQCMAAwGAYDVR0RBBEwD4INd3d3Lmdvb2dsZS5kZTANBgkqhkiG9w0BAQUFAAOB
gQBOBSVeQj4EiCzcgVUmO9BIzQqOHgOQq2ePbgrUln9aX+0SCLvJf/38HrT884Jf
CznPwmTKJmjLRIq6v6RPvYC9O45EM7kjB1YXcCCKiPK7IGmJf8dwZAO4MKLtJnv4
D0k6lc6/SWpmbg33TqEDjl8OsvMUzV6S8XRz2L/rqZ1z1g==
			</textarea>
							       
	        <p><button type="submit" class="btn btn-primary">Decode</button></p>
        </form>
        
        <?php if(isset($_POST['input'])) {     
            require_once 'process.php';
		} ?>
		
		</div>      

      <hr>

      <footer>
        <p class="pull-right">Built with <a href="http://twitter.github.com/bootstrap">Bootstrap</a></p>
        <p>&copy; <a href="https://github.com/FGrosse"><i class="icon-user"></i> Friedrich Große</a>, Berlin 2012</p>
      </footer>

    </div>
    
    <!-- Javascript placed at the end of the document so the pages load faster -->    	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>  	
</body>
</html>