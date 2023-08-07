$(document).ready(function () {
  //login Part
  $('#login_btn').click(function () {
    $.post(
      "../../backend/functions/login_module.php",
      {
        username: $('#username').val(),
        password: $('#password').val(),
        functionName: 'loginfunction'
      },
      function (data, status) {
        console.log(status);
        if (data == 'success_admin') {
          console.log("logged in");
          window.location.href = "../pages/adminDashboard.php"
        } else if (data == 'success_supervisor') {
          console.log("logged in");
          window.location.href = "../pages/supervisorDashboard.php"
        } else if (data == 'success_teller') {
          console.log("logged in")
          window.location.href = "../pages/tellerDashboard.php"
        } else {
          var login_error = $(
            "<div class = 'alert alert-warning col-4' >Username or Password Invalid</div>"
          )

          $('.alert-part').append(login_error);
        }
      }
    );
    $('#username').val("");
    $('#password').val("");
  })



  setInterval(function () { let date = new Date(Date.now()); $('#date').html(date) }, 1000)



  //Add User Part
  $('#addUsers').click(function () {
    $('.userReg').fadeIn(600)
    $('.userReg').css("display", "block");

  })
  $('#close_btn').click(function () {
    $('.userReg').fadeOut(600)


  })


  $('#user_save').click(function () {

    $.post(
      "../../backend/functions/user_reg.php",
      {
        username_reg: $('#user_name').val(),
        password_reg: $('#user_password').val(),
        user_contact_reg: $('#user_contact').val(),
        email_reg: $('#email').val(),
        user_grp_reg: $('#user_grp').val(),
        user_status_reg: $('#user_status').val()
      }, function (data, status) {
        console.log(data)
        console.log(status)
        if (data == "success") {
          window.location.href = "../pages/createUser.php"
        } else if (data == 'empty_username') {
          alert("Insert the username");
        } else if (data == "empty_password") {
          alert("Enter Password");
        } else if (data == "empty_contact") {
          alert("Insert Contact no")
        } else if (data == 'empty_email') {
          alert('Insert Email id');
        } else if (data == 'user_grp_reg') {
          alert("Insert user Group")
        } else if (data == 'empty_user_status') {
          alert("Insert User status")
        }

      })
    
  
    $('#user_name').val("");
    $('#user_password').val("");
    $('#user_contact').val("");
    $('#email').val("");


  })
  //Display User Part
  $.post(
    "../../backend/functions/showUser.php",
    {},
    function (data, status) {
      console.log(status)
      var user_datas = JSON.parse(data);
      let i = 1;
      for (user_data of user_datas) {
        // console.log(user_data)
        var tr_user = $(
          "<tr><td>" +
          i +
          "</td><td>" +
          user_data.username +
          "</td><td>" +
          user_data.group_name +
          "</td><td>" +
          user_data.status +
          "</td></td>" +
          "</td><td><pre><a href='editUser.php'><img src='https://www.svgrepo.com/show/61278/edit.svg' width='20'></a><a href='deleteUser.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png' width='20'></a></pre></td></tr>"
        );
        $('#user_table_body').append(tr_user);
        i++;
      }
    }
  )
  $('#btnAddCategory').click(function () {
    if ($('#add_category').val != "") {
      $.post(
        "../../backend/functions/addCategory.php",
        {
          categoryName: $('#add_category').val()
        },
        function (data, status) {
          console.log(status);
          if (data == 'success') {
            location.reload();
          }
        }

      )
      $('#add_category').val("");
    }
  })
  $.post(
    "../../backend/functions/showCategory.php",
    {},
    function (data, status) {

      console.log(status);
      var categories = JSON.parse(data);
      let i = 1;
      for (category of categories) {
        // console.log(category)

        var tr_category = $(
          "<tr><td>" +
          i +
          "</td><td>" +
          category.category_name +
          "</td><td><pre><a href='edditUser.php'><img src='https://www.svgrepo.com/show/61278/edit.svg' width='20'></a><a href='deleteUser.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png' width='20'></a></pre></td></tr>"


        );
        i++;
        $('#category_table_body').append(tr_category)

      }


    }

  )
  $('#dropdown').click(function () {
    $('.dropdown_logout').toggle();


  })
  $('#logout_menu').click(function () {
    window.location.href = "../../backend/functions/session_destroy.php"

  })
  $('#addSuppliers').click(function () {
    $('.supplierReg').fadeIn(600)
    $('.supplierReg').css("display", "block");

  })
  $('#close_btn').click(function () {
    $('.supplierReg').fadeOut(600)

  })
  $('#supplier_save').click(function () {
    console.log("clicked")
    $.post(
      "../../backend/functions/addSupplier.php",
      {
        supplier_name: $('#supplier_name_reg').val(),
        supplier_contact: $('#supplier_contact').val(),
        supplier_address: $('#supplier_address').val()
      },
      function (data, status) {
        console.log(status)
        if (data == "success") {
          window.location.href = '../pages/supplier.php';
        }
      }
    )
  })
  $.post(
    "../../backend/functions/supplierShow.php",
    {},
    function (data, status) {
      console.log(status);
      var supplier_datas = JSON.parse(data);
      let i = 1;
      for (supplier_data of supplier_datas) {
        // console.log(supplier_data)
        var supplier_tr = $(
          "<tr><td>" +
          i +
          "</td><td>" +
          supplier_data.supplier_name +
          "</td><td>" +
          supplier_data.supplier_address +
          "</td><td>" +
          supplier_data.supplier_contact +
          "</td></td>" +
          "</td><td><pre><a href='editUser.php'><img src='https://www.svgrepo.com/show/61278/edit.svg' width='20'></a><a href='deleteUser.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png' width='20'></a></pre></td></tr>"
        );
        
        $('#supplier_table_body').append(supplier_tr)
        i = i + 1;
      }
    }
  )
  $.post(
    "../../backend/functions/supplierShow.php",
    {},
    function (data, status) {
      var supplier_list = JSON.parse(data);
      for (supplier of supplier_list) {
        var option_supplier = $(
          "<option value=" + supplier.supplier_id + ">" +
          supplier.supplier_name +
          "</option>"

        )
        $('#supplier_name').append(option_supplier);

      }

    }
  )
  $.post(
    "../../backend/functions/showcategory.php",
    {},
    function (data, status) {
      var category_list = JSON.parse(data);
      for (category_option of category_list) {
        var option_category = $(
          "<option value=" + category_option.category_id + ">" +
          category_option.category_name +
          "</option>"

        )
        $('#category').append(option_category);
      }

    }
  )
  $('#category_save_btn').click(function () {
    $('.confirmation-box').fadeIn(600)
    $('.confirmation-box').css("display", "block");

  })
  $('#close_product_confirm').click(function () {
    $('.confirmation-box').fadeOut(600)
  })
  $('#cancel_btn').click(function () {
    $('.confirmation-box').fadeOut(600)
  })

  $('#supplier_name').change(function () {
    $('#purchase_item').empty();
    $.post(
      "../../backend/functions/showProductOption.php",
      {
        supplier: $('.supplier_name').val(),
      },
      function (data, status) {
        var product_list = JSON.parse(data);
      
        for (product of product_list) {
          // console.log(product)
          var product_option = $(
            '<option value=' + product.product_id + '>' + product.product_name + '</option>'
           
          )
          $('#purchase_item').append(product_option)
    
             
        }
        $('#purchase_item').change(function () {
          var p_id = $('#purchase_item option:selected').val()
          for (product of product_list) {
            if (p_id == product.product_id) {
              $('#rate_purchase').val(product.purchase_price);
            }
          }
         
        })
     
      }
    )
  })
 
 

  
  var click_count = 0;
  var purchase_total = 0;
  var bills_array = [];
  $('#add_products').click(function () {
    if ($('#invoice_no').val() == "") {
      alert("Please Insert Invoice no:")
      $('#invoice_no_label').css('color', 'red');
      $('#invoice_no').css('border', '1px solid red');
    } else if ($('#invoice_date').val() == "") {
      alert("Please Enter the invoice Date");
      $('#invoice_date_label').css('color', 'red');
      $('#invoice_date').css('border', '1px solid red');
    }
    else {
      $('.purchase_total').empty();

      var invoice_no = $('#invoice_no').val();
      var invoice_date = $('#invoice_date').val();
      var purchase_rate = $('#rate_purchase').val();
      var product_id = $('#purchase_item').val();
      console.log(product_id)
      $.post(
        "../../backend/functions/showProductName.php",
        {
          product_id_no: $('#purchase_item').val(),
        },
        function (data, status) {
          var product_datas = JSON.parse(data);
          for (product_data of product_datas)
            console.log(product_data.product_name)
          var tr_purchase = $(
            '<tr><td>' +
            click_count +
            '</td><td>' +
            product_data.product_name +
            '</td><td>' +
            item_qty +
            '</td><td>' +
            purchase_rate +
            '</td><td>' + discount_amt_purchase + '</td><td>' +
            ((item_qty * purchase_rate) - discount_amt_purchase) +
            '</td></tr>'

          )
        
          total_price = ((item_qty * purchase_rate) - discount_amt_purchase)
          $('#purchase_bill_data').append(tr_purchase);
          purchase_total = purchase_total + total_price;
          $('.purchase_total').append(purchase_total)
        
       
        }
      
      )

      var item_qty = $('#item_qty').val();
      var discount_amt_purchase = $('#discount_amt').val();
      click_count++;
      var purchase_details_array = {
        invoice_no: invoice_no,
        invoice_date: invoice_date,
        product_id: product_id,
        purchase_rate: purchase_rate,
        item_qty: item_qty,
        discount_amt_purchase: discount_amt_purchase
      };
      bills_array.push(purchase_details_array)
      console.log(bills_array);
   
   
      $('#purchase_item').val("");
      $('#rate_purchase').val("");
      $('#item_qty').val("");
      $('#discount_amt').val("");
    }

  })
  $('#save_purchase_bill').click(function () {
    $('.confirmation-box').fadeIn(600)
    $('.confirmation-box').css("display", "block");
  })
  $('#purchase_save_confirm').click(function () {
    $.post(
      '../../backend/functions/addPurchase.php',
      {
        bill_details: bills_array,
      },
      function (data, status) {
        if (data == "success") {
          window.location.href = '../pages/purchase.php';
        }
      }
        
    )
  })
  $('#purchase_reset').click(function () {
    window.location.href = '../pages/purchase.php';
  })
  $('#search_purchase_bill').click(function () {
    $('#add_products').prop('disabled', true);
    $('#save_purchase_bill').prop('disabled', true);

    $.post(
      "../../backend/functions/searchBill.php",
      {
        bill_id: $('#searchBill').val()
      },
      function (data, status) {
        $('#purchase_bill_data').empty();
        var bill_datas = JSON.parse(data);
        var product_count = 1;
        let bill_total = 0;
        for (bill_data of bill_datas) {
          $('.purchase_total').empty();
          var tr_billshow = $(
            '<tr><td>' +
            product_count +
            '</td><td>' +
            bill_data.product_name +
            '</td><td>' +
            bill_data.purchase_qty +
            '</td><td>' +
            bill_data.purchase_rate +
            '</td><td>' + bill_data.discount_amt + '</td><td>' +
            bill_data.total +
            '</td></tr>'

          )
          product_count++;
          $('#purchase_bill_data').append(tr_billshow);
          bill_total = bill_total + Number(bill_data.total);
        }
        $('.purchase_total').append(bill_total);
      }
    )
    $('#searchBill').val('')
  })
  
  $('#view_product_report').click(function () {
    window.location.href = "viewReport.php"
  })

  $.post(
    '../../backend/functions/showProductList.php',
    {},
    function (data, status) {
     
      var product_list = JSON.parse(data);
      var i = 1;
      var width = 50;
      for (productss of product_list) {
        var product_tr = $(
          '<tr><td>' +
          i +
          '</td><td>' +
          '<img src = "../assets/uploads/' + productss.product_image + '" width=' + width + ' > </td><td>' +
          productss.product_name + '</td><td>' + productss.category_name + '</td><td>' + productss.purchase_price + '</td><td>' +
          productss.sales_price + '</td><td>' + productss.supplier_name + '</td><td>' +
          "<pre><a href='editUser.php'><img src='https://www.svgrepo.com/show/61278/edit.svg' width='20'></a><a href='deleteUser.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png' width='20'></a></pre></td></tr>"
        )
        i++
        $('#product_tr_details').append(product_tr)
        
      }
    }
  )
  $('#searchBtnProduct').click(function () {
    $('#product_tr_details').empty();
    $.post(
      '../../backend/functions/productListSearch.php',
      {
        searchData: $('#searchedData').val()
      },
      function (data, status) {
        var searchResults = JSON.parse(data);
        var i = 1;
        var width = 50;
        for (searchResult of searchResults) {
          var searchedProducts_tr = $(
            '<tr><td>' +
            i +
            '</td><td>' +
            '<img src = "../assets/uploads/' + searchResult.product_image + '" width=' + width + ' > </td><td>' +
            searchResult.product_name + '</td><td>' + searchResult.category_name + '</td><td>' + searchResult.purchase_price + '</td><td>' +
            searchResult.sales_price + '</td><td>' + searchResult.supplier_name + '</td><td>' +
            "<pre><a href='editUser.php'><img src='https://www.svgrepo.com/show/61278/edit.svg' width='20'></a><a href='deleteUser.php'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Delete-button.svg/862px-Delete-button.svg.png' width='20'></a></pre></td></tr>"
          )
          i++
          $('#product_tr_details').append(searchedProducts_tr)
        
        }
      }
    )
  })
  $('#product_report_head').click(function () {
    window.location.href = 'viewReport.php'
  })
  $.post(
    "../../backend/functions/showsalesproducts.php",
    {
    },
    function (data, status) {
      var product_sales_list = JSON.parse(data);
      
      for (product_sales of product_sales_list) {
        // console.log(product)
        var product_options = $(
          '<option value=' + product_sales.product_id + '>' + product_sales.product_name + '</option>'
           
        )
        $('#sales_item').append(product_options)
    
             
      }
      $('#sales_item').change(function () {
        var s_id = $('#sales_item option:selected').val()
        for (product_sales of product_sales_list) {
          if (s_id == product_sales.product_id) {
            $('#rate_sales').val(product_sales.sales_price);
          }
        }
         
      })
    }
     
  );
  //   $('#printProductReport').click(function () {
  //     const element = document.getElementById('product_details_report')
  //     var opt = {
  //   margin:       1,
  //   filename:     'myfile.pdf',
  //   image:        { type: 'jpeg', quality: 0.98 },
  //   html2canvas:  { scale: 2 },
  //   jsPDF:        { unit: 'in', format: 'A4', orientation: 'landscape' }
  // };
  // 				// Choose the element and save the PDF for your user.
  // 				html2pdf().from(element).set(opt).save();
  //   })


  $.post(
    "../../backend/functions/showSalesInvoice.php",
    {},
    function (data, status) {
      console.log(data)
      if (data < 1) {
        $('.sales_invoice_no').val('1');
      } else {
        $('.sales_invoice_no').val(data);

      }
      var sales_date = new Date();
      var sales_year = sales_date.getFullYear();
      var sales_month = sales_date.getMonth() + 1;
      var sales_day = sales_date.getDay() + 1;

      var date_sales = sales_day + '/' + sales_month + '/' + sales_year;
      
      $('.sales_date').val(date_sales)
    }

  )
  var j = 1;
  var sales_bill_array = [];
  var purchase_total = 0;
  $('#sales_product_add').click(function () {
  

    var sales_date = $('.sales_date').val();
    var sales_item_id = $('#sales_item').val();
    var sales_qty = $('.sales_item_qty').val();
    var sales_rate = $('#rate_sales').val();
    var sales_discount = $('.sales_discount').val();
    $('.sales_total').empty();
    if ($('.sales_item_qty').val()=="") {
      alert("Please enter the Quantity")
    } else if ($('#sales_item').val() == "") {
      alert("Please choose the item")
      
    } 
    else {
      if ($('.sales_discount').val() == "") {
      sales_discount = 0;
    }
      $.post(
        '../../backend/functions/showItemName.php',
        {
          sales_item_id: sales_item_id
        },
        function (data, status) {
          var sales_total = ((sales_qty * sales_rate) - sales_discount);
          var salesBillArray = {
            sales_item: data,
            sales_date: sales_date,
            saels_rate: sales_rate,
            sales_qty: sales_qty,
            sales_discount: sales_discount,
            sales_total: sales_total
          }
        
          var sales_tr = $("<tr><td>" + j + "</td><td>" + data + "</td><td>" + sales_qty + "</td><td>" + sales_rate + "</td><td>" + sales_discount + "</td><td>" + sales_total + "</td></tr>")
          $('#sales_bill_data').append(sales_tr)
          j++;
          purchase_total = purchase_total + sales_total;
         
          $('.sales_total').append(purchase_total)
           sales_bill_array.push(salesBillArray);
        
        
        }
      
      )
      $('.sales_item_qty').val('');
      $('.sales_discount').val('');
    }
    })

  $('#sales_reset').click(function () {
    window.location.href="sales.php"
  })
  $('#sales_save').click(function () {
    if (confirm("Are you Sure to Save?") == true) {
      $.post(
        "../../backend/functions/salesBillEntry.php",
        {
          sales_bill_details : sales_bill_array
        },
        function (data, status) {
          console.log(data)
        }
      )
      
    }
  })
})