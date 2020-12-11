const e = React.createElement;

const getExcelData = () => {
  /* set up XMLHttpRequest */
  return new Promise((resolve, reject) => {
    var url = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vSkQubHaST5ozbx5ZNxjEy0c6D4utmdCthB2_i3NgvxsKn3PWj3KON57_sgEFAG-Q/pubhtml?gid=1483429592';
    var oReq = new XMLHttpRequest();
    let jsonFormat
    oReq.open("GET", url, true);
    oReq.responseType = "arraybuffer";

    oReq.onreadystatechange = function () {

      if (oReq.readyState === 4) {
        if (oReq.status >= 200 && oReq.status < 400) {
          var arraybuffer = oReq.response;

          /* convert data to binary string */
          var data = new Uint8Array(arraybuffer);
          var arr = new Array();
          for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
          var bstr = arr.join("");

          /* Call XLSX */
          var workbook = XLSX.read(bstr, {
            type: "binary"
          });

          /* DO SOMETHING WITH workbook HERE */
          var first_sheet_name = workbook.SheetNames[0];
          /* Get worksheet */
          var worksheet = workbook.Sheets[first_sheet_name];
          jsonFormat = XLSX.utils.sheet_to_json(worksheet, {
            raw: true
          })
          resolve(jsonFormat)
        } else {
          reject(new Error('Error')); // Обработка ошибки
        }
      }


    }



    oReq.send()
  })
}


const Price = (props) => {
  const [excel, setExcel] = React.useState()


  const viewData = (data) => {
    console.log(excel)

    return <div className="price-table">
      <div className="tabel-item">
        <div className="table-contnt">
          <span className="table-text upper">Расценки на электромонтажные работы</span>
          <span className="table-units"></span>
          <span className="table-price">Цена, грн.</span>
        </div>
        {data.map(el => <>
          <div className="table-contnt">
            <span className="table-text">{el.name}</span>
            <span className="table-units">{el.units}</span>
            <span className="table-price">{el.cost}</span>
          </div>
        </>)}
      </div>
    </div >

  }

  React.useEffect(() => {
    getExcelData()
      .then((text) => {
        setExcel(text);
      }).catch(function (err) {
        console.error(err);
      });
    // .then(el => console.log(el))
  }, [])

  return excel
    ? viewData(excel)
    : <>Loading...</>
}

const domContainer = document.querySelector('#portfolio')
ReactDOM.render(e(Price), domContainer)  