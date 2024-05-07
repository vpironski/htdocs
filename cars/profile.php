
<?php

// connection

// връзка с базата данни. В dbname се пише името на базата
// в последните два параметъра са потребителско име и парола за базата. Ако не сте ги сменяли, те са: root без парола

$connection = new PDO('mysql:host=localhost:3306;dbname=cars', "root", "");


$id = $_GET['id'];

// със следните редове се зареждат данните от базата в променливата $rows

$query = $connection->prepare('SELECT * FROM cars WHERE id = ?');
$query->execute([$id]);
$row = $query->fetch();


	// htmlspecialchars служи да предотврятяване на грешки при въведени "специални" символи в базата..
	// Просто запомнете, че вашите полетата трябва да бъдат така направени преди да се отпечатат в сайта, за да няма проблеми с данните
	
	$row['id'] = htmlspecialchars( $row['id'], ENT_QUOTES );
	$row['model'] = htmlspecialchars( $row['model'], ENT_QUOTES );
	$row['price'] = htmlspecialchars( $row['price'], ENT_QUOTES );
	$row['year'] = htmlspecialchars( $row['year'], ENT_QUOTES );
	
?>

<!DOCTYPE html><html
lang="en"><head
itemscope="" itemtype="http://schema.org/WebSite"><title
itemprop="name">Preview Bootstrap  snippets. profile with data and skills</title><meta
http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta
name="description" content="Preview Bootstrap snippets. profile with data and skills. Copy and paste the html, css and js code for save time, build your app faster and responsive"><meta
name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js"><meta
content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"><meta
name="viewport" content="width=device-width"><link
rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico"><link
rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png"><link
rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png"><link
rel="canonical" href="https://www.bootdey.com/snippets/preview/profile-with-data-and-skills" itemprop="url"><meta
property="twitter:account_id" content="2433978487" /><meta
name="twitter:card" content="summary"><meta
name="twitter:card" content="summary_large_image"><meta
name="twitter:site" content="@bootdey"><meta
name="twitter:creator" content="@bootdey"><meta
name="twitter:title" content="Preview Bootstrap  snippets. profile with data and skills"><meta
name="twitter:description" content="Preview Bootstrap snippets. profile with data and skills. Copy and paste the html, css and js code for save time, build your app faster and responsive"><meta
name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1105.png"><meta
name="twitter:url" content="https://www.bootdey.com/snippets/preview/profile-with-data-and-skills"><meta
property="og:title" content="Preview Bootstrap  snippets. profile with data and skills"><meta
property="og:url" content="https://www.bootdey.com/snippets/preview/profile-with-data-and-skills"><meta
property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1105.png"><meta
property="og:description" content="Preview Bootstrap snippets. profile with data and skills. Copy and paste the html, css and js code for save time, build your app faster and responsive"><link
rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" /><link
rel="author" href="https://plus.google.com/u/1/106310663276114892188"/><link
rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts"/><meta
name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" /> <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script> </head><body><div
id="snippetContent"><link
rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script> <div
class="container"><div
class="main-body"> <nav
aria-label="breadcrumb" class="main-breadcrumb"><ol
class="breadcrumb"><li
class="breadcrumb-item"><a
href="index.html">Home</a></li><li
class="breadcrumb-item"><a
href="javascript:void(0)">User</a></li><li
class="breadcrumb-item active" aria-current="page">User Profile</li></ol> </nav><div
class="row gutters-sm"><div
class="col-md-4 mb-3"><div
class="card"><div
class="card-body"><div
class="d-flex flex-column align-items-center text-center"> 

<img src="images/<?= $row['id'] ?>.jpg" alt="Admin" class="rounded-circle" width="150">

<div class="mt-3"><h4><?= $row['model'] ?></h4><p
class="text-secondary mb-1">Full Stack Developer</p><p
class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> <button
class="btn btn-primary">Follow</button> <button
class="btn btn-outline-primary">Message</button></div></div></div></div><div
class="card mt-3"><ul
class="list-group list-group-flush"><li
class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle
cx="12" cy="12" r="10"></circle><line
x1="2" y1="12" x2="22" y2="12"></line><path
d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6> <span
class="text-secondary">https://bootdey.com</span></li><li
class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path
d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6> <span
class="text-secondary">bootdey</span></li><li
class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path
d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6> <span
class="text-secondary">@bootdey</span></li><li
class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect
x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path
d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line
x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6> <span
class="text-secondary">bootdey</span></li><li
class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path
d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6> <span
class="text-secondary">bootdey</span></li></ul></div></div><div
class="col-md-8"><div
class="card mb-3"><div
class="card-body"><div
class="row"><div
class="col-sm-3"><h6 class="mb-0">Model</h6></div><div
class="col-sm-9 text-secondary"> <?= $row['model'] ?></div></div><hr><div
class="row"><div
class="col-sm-3"><h6 class="mb-0">Year</h6></div><div
class="col-sm-9 text-secondary"> <?= $row['year'] ?> г.</div></div><hr><div
class="row"><div
class="col-sm-3"><h6 class="mb-0">Price</h6></div><div
class="col-sm-9 text-secondary"> <?= $row['price'] ?> лв.</div></div><hr><div
class="row"><div
class="col-sm-3"><h6 class="mb-0">Mobile</h6></div><div
class="col-sm-9 text-secondary"> (320) 380-4539</div></div><hr><div
class="row"><div
class="col-sm-3"><h6 class="mb-0">Address</h6></div><div
class="col-sm-9 text-secondary"> Bay Area, San Francisco, CA</div></div><hr><div
class="row"><div
class="col-sm-12"> <a
class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a></div></div></div></div><div
class="row gutters-sm"><div
class="col-sm-6 mb-3"><div
class="card h-100"><div
class="card-body"><h6 class="d-flex align-items-center mb-3"><i
class="material-icons text-info mr-2">assignment</i>Project Status</h6> <small>Web Design</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Website Markup</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div></div> <small>One Page</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Mobile Template</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Backend API</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><div
class="col-sm-6 mb-3"><div
class="card h-100"><div
class="card-body"><h6 class="d-flex align-items-center mb-3"><i
class="material-icons text-info mr-2">assignment</i>Project Status</h6> <small>Web Design</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Website Markup</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div></div> <small>One Page</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Mobile Template</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div></div> <small>Backend API</small><div
class="progress mb-3" style="height: 5px"><div
class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div></div></div></div></div></div><style type="text/css">body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}</style> <script type="text/javascript"></script> </div></body></html>