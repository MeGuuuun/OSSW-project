<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>임산부 의약품 복용 도우미</title>
    <link rel="stylesheet" href="https://uicdn.toast.com/grid/latest/tui-grid.css" />
    <link rel="stylesheet" href="https://uicdn.toast.com/tui.pagination/latest/tui-pagination.css" />
    <script src="https://uicdn.toast.com/tui.pagination/latest/tui-pagination.js"></script>
    <script src="https://uicdn.toast.com/grid/latest/tui-grid.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div id="grid"></div>


  <script>

 

    const grid = new tui.Grid({
      el: document.getElementById('grid'),
      data: {
        api: {
          readData: { url: 'getList.php', method: 'GET' }
        }
      },
      pageOptions: {
        perPage: 13,
        
      },
      scrollX: false,
      scrollY: true,
      bodyHeight:500,
      columns: [
          {
          header: '성분명',
          name: '성분명'
          },
          {
          header: '성분코드',
          name: '성분코드'
          },
          {
          header: '제품코드',
          name: '제품코드'
          },
          {
          header: '제품명',
          name: '제품명'
          },
          {
          header: '업체명',
          name: '업체명'
          },
          {
          header: '금기등급',
          name: '금기등급'
          },
          {
          header: '상세정보',
          name: '상세정보'
          }
      ]
      });
 </script>

    
</body>
</html>