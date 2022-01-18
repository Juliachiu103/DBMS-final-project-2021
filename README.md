NCCU 2022 DBMS Final Project 
## 統計打怪獸 -  台北市藝文活動資訊網

### (一) 專案題目
* 專案題目 : 台北市藝文活動資訊網
* 題目說明 : 
透過該資料了解台北藝文活動舉辦情形，與串接相關資訊與查詢介面，以利於協助民眾參與藝文活動。
串接的資訊包含活動、地點資訊、交通資訊、主辦單位背景、鄰近相關景點。
目標是提升藝文活動的能見度與參與度。

### (二) 需求分析

#### 資料需求分析
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


#### 軟硬體需求分析

| 功能需求      |使用工具  |
| :---------  |:------:|
| 網頁後端語言  | PHP    |
| 網頁前端語言  | HTML、CSS   |
| 資料庫       | mySQL  |
| Server      | Apache |

#### 系統功能分析

#### Query/CRUD 
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
    - 主辦單位(只能新增已建檔的)
    - 活動地點(只能新增已建檔的)
- 修改活動資料
    - UID
    - 活動名稱
    - 起迄時間
    - 主辦單位(只能修改已建檔的)
    - 活動地點(只能修改已建檔的)
- 刪除活動資料


### (三) 系統架構
![](https://i.imgur.com/86wCRsP.png)

### (四) 平台頁面

https://user-images.githubusercontent.com/84898509/149908209-bab41472-8326-43cf-9724-d295a4ca5cd7.mp4



