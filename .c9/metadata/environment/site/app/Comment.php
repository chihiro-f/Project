{"filter":false,"title":"Comment.php","tooltip":"/site/app/Comment.php","undoManager":{"mark":49,"position":49,"stack":[[{"start":{"row":8,"column":6},"end":{"row":8,"column":31},"action":"insert","lines":["CommentモデルはUserクラスに紐づいてます"],"id":2}],[{"start":{"row":8,"column":31},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["public function user(){","        return $this->belongsTo(User::class);","    }"],"id":4}],[{"start":{"row":11,"column":5},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":13,"column":0},"action":"insert","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["// Userモデルでmonthly_scheduleを唱えるとMonthly_scheduleのクラスを作る","    public function monthly_schedules(){","        return $this->hasMany(Monthly_schedule::class);","    }"],"id":6}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["r"],"id":7},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":["e"]},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"remove","lines":["s"]},{"start":{"row":13,"column":7},"end":{"row":13,"column":8},"action":"remove","lines":["U"]}],[{"start":{"row":13,"column":7},"end":{"row":13,"column":8},"action":"insert","lines":["C"],"id":8},{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"insert","lines":["o"]},{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["m"]},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["e"],"id":9}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["m"],"id":10},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["e"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["n"]},{"start":{"row":13,"column":13},"end":{"row":13,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["l"],"id":11},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["h"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["t"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["n"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"remove","lines":["o"]},{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"remove","lines":["m"]}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["t"],"id":12},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["o"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["d"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["a"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["y"],"id":13}],[{"start":{"row":13,"column":42},"end":{"row":13,"column":43},"action":"remove","lines":["l"],"id":14},{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"remove","lines":["h"]},{"start":{"row":13,"column":40},"end":{"row":13,"column":41},"action":"remove","lines":["t"]},{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"remove","lines":["n"]},{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"remove","lines":["o"]},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["M"]}],[{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"insert","lines":["T"],"id":15},{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"remove","lines":["d"],"id":16}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"insert","lines":["o"],"id":17},{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"insert","lines":["d"]},{"start":{"row":13,"column":40},"end":{"row":13,"column":41},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["l"],"id":18},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["h"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["t"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["n"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["o"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["m"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["t"],"id":19},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["o"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["d"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["a"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["y"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["y"],"id":20}],[{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"remove","lines":["l"],"id":21},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"remove","lines":["h"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["t"]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["n"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["o"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["M"]}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["T"],"id":22},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["o"]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"insert","lines":["d"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"insert","lines":["a"]}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["V"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["V"],"id":24}],[{"start":{"row":8,"column":4},"end":{"row":12,"column":6},"action":"insert","lines":["protected $fillable = [","     'post_id',","        'name',","        'comment', ","    ];"],"id":25}],[{"start":{"row":12,"column":6},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":22},"end":{"row":8,"column":23},"action":"remove","lines":["e"],"id":27},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"remove","lines":["l"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"remove","lines":["b"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"remove","lines":["a"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["l"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["l"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["i"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["f"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["g"],"id":28},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["u"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["e"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["r"],"id":29},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["e"]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["a"],"id":30},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["r"]},{"start":{"row":8,"column":19},"end":{"row":8,"column":20},"action":"insert","lines":["d"]},{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":["e"]},{"start":{"row":8,"column":21},"end":{"row":8,"column":22},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"remove","lines":["_"],"id":31},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"remove","lines":["t"]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"remove","lines":["s"]},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"remove","lines":["o"]},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":["p"]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":[" "],"id":32},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":26},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":26},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":19},"action":"remove","lines":["        'name',","        'comment', "],"id":34},{"start":{"row":9,"column":13},"end":{"row":10,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":4},"end":{"row":20,"column":5},"action":"remove","lines":["// Commentモデルでtoday_scheduleを唱えるとToday_scheduleのクラスを作る","    public function today_schedules(){","        return $this->hasMany(Today_schedule::class);","    }"],"id":35}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "],"id":36},{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "]},{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":15,"column":5},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":20,"column":5},"action":"insert","lines":["//Today_scheduleモデルはCommentクラスに紐づいてます","    public function comment(){","        return $this->belongsTo(Comment::class);","    }"],"id":38}],[{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["e"],"id":39},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["l"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["u"]},{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"remove","lines":["d"]},{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"remove","lines":["e"]},{"start":{"row":17,"column":14},"end":{"row":17,"column":15},"action":"remove","lines":["h"]},{"start":{"row":17,"column":13},"end":{"row":17,"column":14},"action":"remove","lines":["c"]},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"remove","lines":["s"]},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"remove","lines":["_"]},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"remove","lines":["y"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"remove","lines":["a"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["d"]},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"remove","lines":["o"]}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"remove","lines":["T"],"id":40}],[{"start":{"row":17,"column":6},"end":{"row":17,"column":7},"action":"insert","lines":["C"],"id":41},{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":["o"]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["m"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["m"]},{"start":{"row":17,"column":10},"end":{"row":17,"column":11},"action":"insert","lines":["e"]},{"start":{"row":17,"column":11},"end":{"row":17,"column":12},"action":"insert","lines":["n"]},{"start":{"row":17,"column":12},"end":{"row":17,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["t"],"id":42},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"remove","lines":["n"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"remove","lines":["e"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"remove","lines":["m"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"remove","lines":["m"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"remove","lines":["o"]},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"remove","lines":["C"]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["T"],"id":43},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["o"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["d"]},{"start":{"row":17,"column":20},"end":{"row":17,"column":21},"action":"insert","lines":["a"]},{"start":{"row":17,"column":21},"end":{"row":17,"column":22},"action":"insert","lines":["y"]},{"start":{"row":17,"column":22},"end":{"row":17,"column":23},"action":"insert","lines":["_"]},{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["s"]},{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"insert","lines":["c"]},{"start":{"row":17,"column":25},"end":{"row":17,"column":26},"action":"insert","lines":["h"]},{"start":{"row":17,"column":26},"end":{"row":17,"column":27},"action":"insert","lines":["e"]},{"start":{"row":17,"column":27},"end":{"row":17,"column":28},"action":"insert","lines":["d"]}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["u"],"id":44},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["l"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"remove","lines":["n"],"id":45},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["e"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["m"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["m"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["o"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["c"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["o"],"id":46},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["d"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["a"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["y"]}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":25},"action":"remove","lines":["today"],"id":47},{"start":{"row":18,"column":20},"end":{"row":18,"column":34},"action":"insert","lines":["today_schedule"]}],[{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"remove","lines":["n"],"id":48},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"remove","lines":["e"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"remove","lines":["m"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"remove","lines":["m"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["o"]}],[{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"remove","lines":["t"],"id":49},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["C"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["T"],"id":50},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["o"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["d"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["a"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":36},"action":"remove","lines":["Toda"],"id":51},{"start":{"row":19,"column":32},"end":{"row":19,"column":46},"action":"insert","lines":["Today_schedule"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":47},"end":{"row":19,"column":47},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1631407721088,"hash":"ba005034e5afb1913c834ccfcb989a9aa6aa9461"}