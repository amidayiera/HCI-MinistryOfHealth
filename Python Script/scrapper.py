import time
import requests
from bs4 import BeautifulSoup

standard_url = "https://www.standardmedia.co.ke/health/category/41/health-science"

moh_url = "https://www.health.go.ke"

base_url = " http://127.0.0.1:8000/"
rest_api_url = base_url + "api/news"

clear = base_url + "api/clear"

headline_title = []
headline_url = []
image = []

moh_headline_title = []
moh_headline_url = []
moh_image = []

standard_results = requests.get(standard_url)
soup = BeautifulSoup(standard_results.content, "html.parser")

moh_results = requests.get(moh_url)
moh_soup = BeautifulSoup(moh_results.content, "html.parser")


def standard():
    # Accessing the div with the health news
    for a in soup.find_all('div', class_="col-md-8 bg-white p-3"):
        headline_titles = a.findAll('h5')
        headline_image = a.findAll('div', class_="standard-image")

    # Getting the titles of the articles
    for res in headline_titles:
        headline_item = res.getText()
        headline_title.append(headline_item)

    # Getting the links of the articles
    for b in a.findAll('div', class_="single-standard"):
        for article_link in b.find_all('a', href=True):
            headline_url.append(article_link['href'])

    # Getting the images of the articles
    for img in headline_image:
        image_item = img.findAll('img')
        for img_link in image_item:
            image.append(img_link['data-src'])

    print("Checking for updates...")

    i = 0
    for t in headline_image:
        allItems = {"title": headline_title[i], "link": headline_url[i], "image": image[i]}
        r = requests.post(rest_api_url, data=allItems)
        print(r)
        print(allItems)
        i += 1


def moh():
    # Accessing the div with the health news
    for a1 in moh_soup.find_all('ul', class_="small-thumb"):
        headline_titles1 = a1.findAll('a', class_="teaser-title")
        headline_image1 = a1.findAll('div', class_="custom-frame-padding")

    # Getting the titles of the articles
    for res1 in headline_titles1:
        moh_headline_title.append(res1.getText())

    # Getting the links of the articles
    for b1 in a1.findAll('a', class_="teaser-title", href=True):
        moh_headline_url.append(b1['href'])

    # # Getting the images of the articles
    for img1 in headline_image1:
        image_item1 = img1.findAll('img')
        for img_link1 in image_item1:
            moh_image.append(img_link1['src'])

    print("\n\nChecking for Ministry of Health news updates...")

    j = 0
    for t in moh_headline_title:
        allItems1 = {"title": moh_headline_title[j], "link": moh_headline_url[j], "image": moh_image[j]}
        r1 = requests.post(rest_api_url, data=allItems1)
        print(r1)
        print(allItems1)
        j += 1


def Truncate():
    requests.get(clear)


while True:
    Truncate()
    standard()
    moh()
    time.sleep(60 * 60 * 3)
