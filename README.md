一個簡單、輕量的 WordPress Analytics 外掛，提供乾淨直覺的 Dashboard 與設定頁面，方便站長快速檢視網站數據。

✨ 功能特色

Dashboard：即時查看網站數據（流量、文章瀏覽數、用戶數等）。

設定頁：簡單選項，方便管理與擴充。

輕量化：僅在後台載入資源，不影響前台效能。

模組化架構：可快速擴充更多分析功能。

🚀 安裝方式

下載此專案並壓縮成 .zip

進入 WordPress 後台 → 外掛 → 安裝外掛 → 上傳外掛

啟用外掛後，左側選單會出現 Analytics

⚙️ 開發筆記

僅在後台載入 CSS/JS → 確保前台效能。

使用 Chart.js 或 Google Charts 繪製報表。

資料快取建議用 Transients API 減少 DB 查詢壓力。

📌 待辦清單 (Roadmap)

 整合 GA4 API

 支援 WooCommerce 銷售數據

 提供 PDF/CSV 報表匯出

 增加自訂事件追蹤
