<html>
<head>
<title> BounceBusters Tools </title>
<meta name="description" content="BounceBusters Tools is an app to look up through blacklists, DNS records such as SPF, MX, Whois">
<meta property="og:description" content="BounceBusters Tools is an app to look up through blacklists, DNS records such as SPF, MX, Whois" />
<meta name="keywords" content="BounceBusters, Bounce Busters, Deliverability, Email, Email Deliverability, MXToolbox, DNS, Blacklist, MX">
<meta name="author" content="BounceBusters - forked from Charles Barnes">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="msapplication-TileColor" content="#4ca2a3">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="BounceBusters Tools">
<meta name="theme-color" content="#44c0f0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="styles/style.css" rel="stylesheet">

<script src ="javascript/main.js"></script>


</head>
<body>
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-md-12">
                <H1 class="logo"><Span class = "logo-style1">BounceBusters</Span> Tools</H1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                    <span class="form-label">Domain:&nbsp;</span><input type="text" name="domain" id="domain" class="form-control">
                    <select onchange="showAdditionalFields()" id="file" class="form-control">
                        <option value="blacklist">Blacklist Check</option>
                        <option value="a">Get A Record</option>
                        <option value="aaaa">Get IPv6 AAAA Record</option>
                        <option value="mx">Get MX Record</option>
                        <option value="txt">Get SPF/TXT</option>
                        <option value="whois">Check Whois</option>
                        <option value="all">Get All DNS records</option>
                        <option value="reverseLookup">Host By IP/Reverse Lookup</option>
                    </select>
                    <div style="visibility: hidden" id="port-container"><span class="form-label" sty;e>Port:&nbsp;</span><input type="text" name="port" id="port" class="form-control"></div>
                    <input type="button" id="submit" value="submit" class="form-control btn"/>
            </div>
            <div class="col-md-6"></div>
            <div>

                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <span id="txtHint" style="color: red;"></span>
                <div id="loading">
                <div class="info">
                <h3>About BounceBusters Tools</h3>
                <span>BounceBusters Tools was created to be an easy, free way for people to get information about their domain, and their email deliverability.</span>
                <br/>
                <br/>
                <br/>
                    <table>
                        <tr>
                            <th>Query</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>Blacklist Check</td>
                            <td>Select this option if you want us to check if your domain/IP is blacklisted. We currently supports over 50 most impactful blacklists.</td>
                        </tr>
                        <tr>
                            <td>Get A Record</td>
                            <td>An A Record is used to associate a domain name with an IP(v4) address. This query checks for the A records set on the domain</td>
                        </tr>
                        <tr>
                            <td>Get IPv6 AAAA Record</td>
                            <td>An AAAA Record is used to associate a domain name with an IP(v6) address. This query checks for the AAAA records set on the domain</td>
                        </tr>
                        <tr>
                            <td>Get MX Record</td>
                            <td>MX stands for Mail Exchanger.  This query is used to get the mail server used for accepting emails on the specified domain.</td>
                        </tr>
                        <tr>
                            <td>Get SPF/TXT</td>
                            <td>A SPF Record is used to indicate which email hosts is authorized to send mail on the specified domain's behalf.  This query is used to get the authorized domains</td>
                        </tr>
                        <tr>
                            <td>Check Whois</td>
                            <td>This information gets whois information to see who possibly owns the domain.</td>
                        </tr>
                        <tr>
                            <td>Get All DNS Records</td>
                            <td>This query attemps to do a request for all of the available DNS information for the specified hostname.</td>
                        </tr>
                        <tr>
                            <td>Host By IP/Reverse Lookup</td>
                            <td>The query attempts to find a hostname associated with an IP address</td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div id="responseArea">
                    <div  class="responseTable">
                        
                    </div>
                </div>
        </div>        
    </div>
    <footer>
        <br>
        <p>Created by <a href="https://bouncebusters.co">Bounce Busters</a> | Contact: <a href="mailto:hello@bouncebusters.co">us</a></p>
    </footer>
</body>

</html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '');
</script>
