/* 

command line Usage:  node pup461a.js

dgleba@gmail.com 

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

const puppeteer = require('puppeteer');

// Boilerplate stuff
async function startBrowser() {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  return {browser, page};
}

async function closeBrowser(browser) {
  return browser.close();
}

// Normalizing the text
function getText(linkText) {
  linkText = linkText.replace(/\r\n|\r/g, "\n");
  linkText = linkText.replace(/\ +/g, " ");

  // Replace &nbsp; with a space 
  var nbspPattern = new RegExp(String.fromCharCode(160), "g");
  return linkText.replace(nbspPattern, " ");
}

// find the link, by going over all links on the page
async function findByLink(page, linkString) {
  const links = await page.$$('a')
  for (var i=0; i < links.length; i++) {
    let valueHandle = await links[i].getProperty('innerText');
    let linkText = await valueHandle.jsonValue();
    const text = getText(linkText);
    if (linkString == text) {
      console.log(linkString);
      console.log(text);
      console.log("Found");
      return links[i];
    }
  }
  return null;
}

async function playTest(url) {
  const {browser, page} = await startBrowser();
  page.setViewport({width: 1366, height: 768});
  await page.goto(url);
  
  // await findByLink(page, "Lets Check It Out");
  // works
  // await findByLink(page, "notebook computer");
  // await findByLink(page, "Activate Ignition");
  await findByLink(page, "Activate");
  
  await page.screenshot({path: 'screenshot.png'});
  await closeBrowser(browser);
}

(async () => {
  console.log("start");
  // await playTest("https://browsee.io/");
  // works
  // await playTest("https://en.wikipedia.org/wiki/Surface_Pro_(2017)");
  await playTest("http://192.168.88.39:8088");
  process.exit(1);
})();


