# DBMS-final-project-2021DBMS Final Project 
# 統計打怪獸 -  台北市藝文活動資訊網

## (一) 專案題目、組名
* 專案題目 : 台北市藝文活動資訊網
* 題目說明 : 
透過該資料了解台北藝文活動舉辦情形，與串接相關資訊與查詢介面，以利於協助民眾參與藝文活動。
串接的資訊包含活動、地點資訊、交通資訊、主辦單位背景、鄰近相關景點。
目標是提升藝文活動的能見度與參與度。

* 組名 : 統計打怪獸

## (二) 組員
* 組長 : 
邱靖雅 統計碩二 109354013
* 組員 : 
陳麒仲 統計碩二 109354022
徐敬雯 統計碩二 109354023
潘維辰 統碩碩二 109354025 (旁聽)
郭柔芸 統計碩二 109354007
張靜如 統計碩二 109354021





## (三) 需求分析


### 資料需求分析
希望透過此互動系統，協助使用者在搜尋有興趣之藝文活動資訊時，可同時了解到活動地點、附近交通、舉辦單位以及鄰近景點等相關資訊。其中交通以公車資訊為主。

source from:
* [政府資料開放平台(藝文):](https://data.gov.tw/datasets/search?p=1&size=10&s=dataset_view_times_desc&rft=%E8%97%9D%E6%96%87)
* [政府資料開放平台(藝文活動)](https://data.gov.tw/dataset/6478)
* [文化部國家文化記憶庫(人物與團體類)](https://opendata.culture.tw/frontsite/openData/detail?datasetId=749)
* [臺北旅遊網(分區遊憩景點)](https://www.travel.taipei/zh-tw)
* [台北市YouBike開放資料(.json)](https://tcgbusfs.blob.core.windows.net/blobyoubike/YouBikeTP.json)
* [高雄市YouBike 2.0開放資料(.json)](http://od-oas.kcg.gov.tw/api/service/Get/b4dd9c40-9027-4125-8666-06bef1756092)
* [台北市公車資料庫平台說明文件](https://www-ws.gov.taipei/Download.ashx?u=LzAwMS9VcGxvYWQvNDU4L3JlbGZpbGUvMjI1NDUvNjU1NDM2MC81MjllNmU4Yi1hM2EzLTRjNzktODExOS0wOWUyNDJhMDNmYjcucGRm&n=6Ie65YyX5biCRGF0YS5UYWlwZWnlubPlj7BBUEnoqqrmmI7mlofku7ZfVjUuMC5wZGY%3d&icon=..pdf)
* [台中市公共運輸處公開資料下載處](https://tcrt.taichung.gov.tw/content/index?Parser=1,9,58)


### 軟硬體需求分析

| 功能需求      |使用工具  |
| :---------  |:------:|
| 網頁後端語言  | PHP    |
| 網頁前端語言  | HTML   |
| 資料庫       | mySQL  |
| Server      | Apache | 





## (四) ER model
![ER](https://i.imgur.com/0Xe2jPJ.png)

## (五) Relational Schema
![Relational Schema](https://i.imgur.com/gIFmSCs.png)






## (六) 系統架構
![](https://i.imgur.com/86wCRsP.png)



## (七) 系統功能分析

##### 查詢/CRUD 
為了讓使用者便於了解台北的文藝活動，我們設計一系列的查詢，除了可以讓我們找到某些特定時間的文藝活動，還能知道該活動所處地點的附近景點資訊與附近交通資訊。
而活動會越辦越多或偶爾發生活動資訊的變動，因此後端也可以從網頁自行新增、修改或是刪除活動的相關資訊。
根據以上敘述，我們發展出了以下的系統功能模組：
- 查詢活動
- 列出該活動的附近景點(最近的20個景點)
- 列出該活動的附近車站(3km內的公車站)
- 新增活動資料
    - UID
    - 活動名稱
    - 起迄時間
    - 主辦單位(只能新增已有的)
    - 活動地點(只能新增已有的)
- 修改活動資料
    - UID
    - 活動名稱
    - 起迄時間
    - 主辦單位(只能修改已有的)
    - 活動地點(只能修改已有的)
- 刪除活動資料


## (八) 任務分工、貢獻百分比

| 組員 | 任務分工 | 貢獻百分比 |
| -------- | -------- | -------- |
|邱靖雅|前端介面(HTML)|15%|
|陳麒仲|後端(PHP)|20%|
|徐敬雯|後端(PHP)、ER model|20%|
|潘維辰(旁聽)|資料清理|15%|
|郭柔芸|建立資料庫、relational data model|15%|
|張靜如|資料整理|15%|


## (九) 心得

身為統計系的學生，第一次開發Web-Based資料庫應用系統，從資料清理、建立資料庫、前端和後端的操作與執行，過程中遇到許多困難也學習到很多。

在統計系我們常聽到很多學長姐分享說分析一個資料通常要花70%的時間在前處理上，但這次的期末報告，我們在資料收集和中文字的處理其實已經非常熟悉，反而在前端使用者介面和後端上，因為是較為生疏的領域，才佔了最多的人力與時間，研究如何在SQL與php的串聯，還有一些像是html和php是什麼關係等基礎的問題。

我們採用分工的方式，讓每個組員都有自己要處理的一塊領域，並在小組討論時分享遇到的問題和對應的解決辦法，讓小組之間保持資訊互通，方便後續的討論方向和最後的結果呈現。本次報告除了更熟悉資料庫的建立外，學會前端和後端的建立是意外的收穫！



