/* 

command line Usage:  node pupshot.js


dgleba@gmail.com 2019-01-25 10:48PM

Take screenshot of webpage using puppeteer with chromium headless

https://github.com/GoogleChrome/puppeteer/blob/v1.11.0/docs/api.md

Installation..

on windows, install node.js:
  choco install node-lts 

c:
mkdir \crib\prog\puppeteer
cd \crib\prog\puppeteer
npm init
npm i --save puppeteer
npm i --save dayjs

*/

// 'use strict';

const puppeteer = require('puppeteer');
const dayjs = require('dayjs');

// handle promise errors globally..
// https://stackoverflow.com/questions/31472439/catch-all-unhandled-javascript-promise-rejections
process.on('unhandledRejection', function(err, promise) {
    console.error('Unhandled rejection (promise: ', promise, ', reason: ', err, ').');
    return process.exit(1);
    // dgleba_make_error_to_exit();
});

// print command line arguments.. process.argv
process.argv.forEach(function (val, index, array) {
  console.log(index + ': ' + val);
});
const argsin = process.argv[2] ;
console.log('arg 2 = ', argsin);



(async() => {
  

  // Settings..
  //
  // var wpage =  'http://pmdsdata8:6151/public/dashboard/872dc41d-4fe6-41a2-ab46-70c76d58bf44';

  var wpage = 'http://10.4.1.231:6151/public/dashboard/872dc41d-4fe6-41a2-ab46-70c76d58bf44';
  var dirout = 'tmp/';
  var fn = 'trilobe-scrap';


  
  var out = dirout.concat(fn,'_',dayjs().format('YYMMDD_HHmm.ss.SSSZZ'),'.jpg');
  

  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  
  await page.setViewport( { width:1920, height:1080 } ); 
  
  
  await page.goto( wpage , {waitUntil: 'networkidle0'} );
  
  await page.screenshot( { path: out,  quality: 99 } );
  
  await browser.close();
})();

