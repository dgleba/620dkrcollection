const puppeteer = require('puppeteer');

const escapeXpathString = str => {
  const splitedQuotes = str.replace(/'/g, `', "'", '`);
  return `concat('${splitedQuotes}', '')`;
};

const clickByText = async (page, text) => {
  const escapedText = escapeXpathString(text);
  const linkHandlers = await page.$x(`//a[contains(text(), ${escapedText})]`);
  
  if (linkHandlers.length > 0) {
    await linkHandlers[0].click();
  } else {
    throw new Error(`Link not found: ${text}`);
  }
};



const run = async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  
  // await page.goto('https://en.wikipedia.org/wiki/List_of_The_Sandman_characters');
  await page.goto('http://192.168.88.39:8088/web/signin');
  
  await page.screenshot({path: 'screenshotc3a.png'});

  // login
  
  await page.waitFor('input[name="username"]');
  await page.type('input[name="username"]', 'admin');
  // await page.type('[username]', 'admin')
  
  await page.type('input[name="password"]', 'pas123')
  await page.click('[value="Sign In"]')
  // await page.waitForNavigation()
  
  await page.screenshot({ path: 'screenshotc3b.png' })


  // Click reset trial..
  
  console.log("Current page:", page.url());
  await clickByText(page, `Reset Trial`); 
  // await page.waitForNavigation({waitUntil: 'load'});
  
  await page.screenshot({path: 'screenshotc3c.png'});
  
  return browser.close();
};

const logErrorAndExit = err => {
  console.log(err);
  process.exit();
};

run().catch(logErrorAndExit);

