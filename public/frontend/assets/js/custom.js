// product color active
$(".color-circle").on("click", function () {
    $(".color-circle").removeClass("color1").addClass("color2");
    $(this).removeClass("color2").addClass("color1");
});

$(".sub-menu-click").hover(function () {
    var category = $(this).attr("data-category");
    $('.pane').css("display", "none");
    $("." + category).css("display", "block");
});

$(".pane").hover(
    function () {},
    function () {
        $(this).css("display", "none");
    }
);

reply = () => {
    let replyInput = document.getElementById("replyComment");
    replyInput.style.display ="block";
}
// Custom dropdown
$(function() {
    var dd1 = new dropDown($('#myDropdown'));
    
    $(document).click(function() {
      $('.wrapper-dropdown').removeClass('active');
    });
  });
  
  function dropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  dropDown.prototype = {
    initEvents: function() {
      var obj = this;
      
      obj.dd.on('click', function() {
        $(this).toggleClass('active');
        return false;
      });
      
      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
      });
    }
  }
//   Filter item dropdown
// Price
$(function() {
    var dd1 = new dropDown($('#myDropdown1'));
    
    $(document).click(function() {
      $('.wrapper-dropdown').removeClass('active');
    });
  });
  
  function dropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  dropDown.prototype = {
    initEvents: function() {
      var obj = this;
      
      obj.dd.on('click', function() {
        $(this).toggleClass('active');
        return false;
      });
      
      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
      });
    }
  }

//   size
$(function() {
    var dd1 = new dropDown($('#myDropdown2'));
    
    $(document).click(function() {
      $('.wrapper-dropdown').removeClass('active');
    });
  });
  
  function dropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  dropDown.prototype = {
    initEvents: function() {
      var obj = this;
      
      obj.dd.on('click', function() {
        $(this).toggleClass('active');
        return false;
      });
      
      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
      });
    }
  }

// color
$(function() {
    var dd1 = new dropDown($('#myDropdown3'));
    
    $(document).click(function() {
      $('.wrapper-dropdown').removeClass('active');
    });
  });
  
  function dropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  dropDown.prototype = {
    initEvents: function() {
      var obj = this;
      
      obj.dd.on('click', function() {
        $(this).toggleClass('active');
        return false;
      });
      
      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
      });
    }
  }
// product
$(function() {
    var dd1 = new dropDown($('#myDropdown4'));
    
    $(document).click(function() {
      $('.wrapper-dropdown').removeClass('active');
    });
  });
  
  function dropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  dropDown.prototype = {
    initEvents: function() {
      var obj = this;
      
      obj.dd.on('click', function() {
        $(this).toggleClass('active');
        return false;
      });
      
      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
      });
    }
  }
