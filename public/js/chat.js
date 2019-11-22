function getTimeYYYMMDD() {
    return (new Date).toLocaleDateString()
}

function getTimeYYYMMDD_HHMM() {
    var e = new Date;
    return e.toLocaleDateString() + " " + e.toLocaleTimeString().substring(0, 5)
}

function getTimeHHMM() {
    return (new Date).toLocaleTimeString().substring(0, 5)
}

function newMessage(e) {
    var t = e.target.input;
    if (t.value) {
        var s = buildMessage(t.value);
        conversation.appendChild(s), mq.push(s)
    }
    t.value = "", conversation.scrollTop = conversation.scrollHeight, e.preventDefault()
}

function deletecurrentchat() {
    c = confirm("Deseja realmente excluir esta conversa?"), c && null != cci && (userid = ccn.getAttribute("data-userid"), cci.remove(), window.location.hash = "home", queryJSON("?query=delete&userid=" + userid, function(e) {
        "deleted" == e ? console.log("successfully deleted") : console.log("not successfully deleted")
    }))
}

function buildMessage(e) {
    var t = document.createElement("div");
    return t.classList.add("message"), t.classList.add("sent"), t.setAttribute("data-userid", ccn.getAttribute("data-userid")), t.setAttribute("data-message", e), t.innerHTML = e + '<span class="metadata"><span class="time">' + getTimeHHMM() + '</span><span class="tick">' + iq + "</span></span>", t
}

function loadMessage(e) {
    for (var t = document.querySelectorAll(".message"), s = null, a = 0; a < t.length; a++)
        if (t[a].getAttribute("data-id") == e.id) {
            s = t[a];
            break
        }
    var n = e.messagetype;
    if ("sent" == n) {
        var i = "",
            r = "";
        null != e.readdate ? (r = "Lida", i += ir) : null != e.deliverydate ? (r = "Entregue", i += id) : (r = "Enviada", i += is)
    } else r = "", i = "";
    if (null != s && "sent" == n && (s.getElementsByClassName("tick")[0].innerHTML = i), null == s) {
        var o = document.createElement("div");
        return o.setAttribute("class", "message " + n), o.setAttribute("data-id", e.id), o.setAttribute("data-messagetype", n), messageHTML = e.message + '<span class="metadata"><span class="time" title="' + e.senddate + '">' + (e.senddate.substring(0, 10) == today ? e.senddate.substring(11) : e.senddate.substring(0, 10) == yesterday ? "ontem" : e.senddate.substring(0, 10)) + "</span>", "sent" == n && (messageHTML += '<span class="tick" title="' + r + '">' + i + "</span>"), messageHTML += "</span>", o.innerHTML = messageHTML, conversation.appendChild(o), o
    }
    return s
}

function addChatItem(e) {
    for (var t = document.querySelectorAll(".ci"), s = null, a = 0; a < t.length; a++)
        if (t[a].getAttribute("data-userid") == e.user_id) {
            s = t[a];
            break
        }
    if (lastmessage = "", e.unreadmessages > 0 ? lastmessage = '<span class="unreadmessages">[' + e.unreadmessages + "]</span> " + e.lastmessage : lastmessage = e.lastmessage, lastDatetime = null != e.lastdate ? e.lastdate.substring(0, 10) == today ? e.lastdate.substring(11) : e.lastdate.substring(0, 10) == yesterday ? "ontem" : e.lastdate.substring(0, 5) : "", icon = "", "sent" == e.laststatus ? icon = is : "delivered" == e.laststatus ? icon = id : "read" == e.laststatus && (icon = ir), icon = '<span style="position:relative;top:4px;">' + icon + "</span>", null == e.avatar ? e.avatar = "/empty-avatar.jpg" : e.avatar = "https://www.desapega.net/thumbs/160x120/" + e.avatar, null != s) return s.getElementsByClassName("status")[0].innerHTML = icon + lastmessage, moveUp = s.getElementsByClassName("status")[1].title != e.lastdate, s.getElementsByClassName("status")[1].title = e.lastdate, s.getElementsByClassName("status")[1].innerHTML = lastDatetime, moveUp && selection.insertBefore(s, selection.firstChild), s.setAttribute("data-online", e.online), s.setAttribute("data-lastseendate", e.lastseendate), s;
    if (null == s) {
        var n = document.createElement("div");
        return n.setAttribute("class", "ci"), n.setAttribute("data-userid", e.user_id), n.setAttribute("data-avatar", e.avatar), n.setAttribute("data-name", e.name), n.setAttribute("data-online", e.online), n.setAttribute("data-lastseendate", e.lastseendate), n.innerHTML = '<div class="avatar"><img src="' + e.avatar + '" alt="Avatar"></div><div class="name"><span title="' + e.email + '">' + e.name + '</span><span class="status">' + icon + lastmessage + '</span></div><div class="actions more"><span class="status" title="' + e.lastdate + '">' + lastDatetime + "</span>                                                             </div>", firstUpdateConversations ? selection.insertBefore(n, selection.lastChild) : selection.insertBefore(n, selection.firstChild), n
    }
}

function sendQueuedMessages() {
    setTimeout(function() {
        var e = [];
        i = 0;
        for (a in mq) mq1 = mq[a], null == mq1.getAttribute("data-msgid") && (msgid = Math.floor(1e12 * Math.random()), mq1.setAttribute("data-msgid", msgid), e.push({
            msgid: msgid,
            userid: mq1.getAttribute("data-userid"),
            message: mq1.getAttribute("data-message")
        })), i++;
        e.length > 0 && queryJSON("?query=sends&messages=" + encodeURIComponent(JSON.stringify(e)), function(e) {
            var t = JSON.parse(e);
            for (x in t)
                for (m = t[x], i = mq.length; i--;)
                    if (mq1 = mq[i], m.msgid == mq1.getAttribute("data-msgid")) {
                        mq1.setAttribute("data-id", m.id), mq1.getElementsByClassName("tick")[0].innerHTML = is, mq.splice(i, 1);
                        break
                    }
        }), sendQueuedMessages()
    }, 2e3)
}

function queryJSONSync(e) {
    var t = new XMLHttpRequest;
    return t.overrideMimeType("application/json"), t.open("GET", "/json.php" + e, !1), t.send(null), 200 === t.status ? t.responseText : "error"
}

function queryJSON(e, t) {
    var s = new XMLHttpRequest;
    s.overrideMimeType("application/json"), s.open("GET", "/json.php" + e, !0), s.onreadystatechange = function() {
        4 == s.readyState && "200" == s.status && t(s.responseText)
    }, s.send(null)
}

function updateConversationsInit() {
    queryJSON("?query=conversations", function(e) {
        blocked = !1, conversations = JSON.parse(e), unreadconversations = 0;
        for (x in conversations) c = conversations[x], addChatItem(c), lastmessage = "", c.unreadmessages > 0 && unreadconversations++;
        firstUpdateConversations = !1, unreadconversations > 0 ? document.title = "[" + unreadconversations + "] " + originalTitle : document.title = originalTitle;
        for (var t = document.getElementsByClassName("ci"), s = 0; s < t.length; s++) t[s].addEventListener("click", displayChat, !1);
        init && (window.onhashchange(), init = !1), updateConversations()
    })
}

function updateConversations() {
    console.log("updateConversations"), setTimeout(function() {
        updateConversationsInit()
    }, 1e4)
}

function updateChat() {
    setTimeout(function() {
        null == cci ? console.log("updateChat skip") : (console.log("updateChat update"), userid = cci.getAttribute("data-userid"), queryJSON("?query=display&userid=" + userid, function(e) {
            if (null != cci && userid == cci.getAttribute("data-userid")) {
                var t = JSON.parse(e);
                for (x in t) m = t[x], loadMessage(m)
            }
        })), updateChat()
    }, 2e3)
}

function loaduser() {
    queryJSON("?query=loaduser", function(e) {
        null == (user = JSON.parse(e)) ? openModalId("m-cadastro") : start()
    })
}

function saveuser(e, t, s) {
    null == e && (e = ""), null == t && (t = ""), null == s && (s = ""), queryJSON("?query=saveuser&name=" + encodeURIComponent(e) + "&email=" + encodeURIComponent(t) + "&phone=" + encodeURIComponent(s), function(e) {
        "userexists" == e ? openModalId("m-login") : user = JSON.parse(e)
    })
}

function isEmail(e) {
    return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)
}

function start() {
    updateConversationsInit(), updateChat(), sendQueuedMessages()
}

function updateConversations() {
    console.log("updateConversations:"), setTimeout(function() {
        updateConversationsInit()
    }, 4e3)
}

function openModalId(e) {
    document.getElementById("m-content").innerHTML = "<p>" + document.getElementById(e).innerHTML + "</p>", document.getElementById("m-modal").style.display = "block"
}

function closeModal() {
    username = document.getElementById("name").value, useremail = document.getElementById("email").value, userphone = document.getElementById("phone").value, valid = !0, isEmail(useremail) ? valid = !0 : (valid = !1, alert("E-mail invÃƒÂ¡lido")), valid && (saveuser(username, useremail, userphone), document.getElementById("m-modal").style.display = "none", start())
}
var today = (new Date).toLocaleDateString(),
    yesterday = new Date;
yesterday.setDate(yesterday.getDate() - 1), yesterday = yesterday.toLocaleDateString();
var dt = document.querySelector(".status-bar .time"),
    mt = document.querySelectorAll(".message .time");
dt.innerHTML = getTimeYYYMMDD_HHMM(), setInterval(function() {
    dt.innerHTML = getTimeYYYMMDD_HHMM()
}, 1e3);
for (var i = 0; i < mt.length; i++) mt[i].innerHTML = getTimeHHMM();
var conversation = document.querySelector(".conversation-container"),
    selection = document.querySelector(".chat-selection-container"),
    iq = '<i class="i-clock-o"></i>',
    is = '<i class="i-check-1"></i>',
    id = '<i class="i-check-1" style="color:green;"></i>',
    ir = '<i class="i-check-1" style="color:rgb(102, 204, 239);"></i>',
    mq = [],
    cci = null,
    ccn = document.getElementById("ccn"),
    ccs = document.getElementById("ccs");
form.addEventListener("submit", newMessage);
var firstUpdateConversations = !0,
    displayChat = function() {
        location.hash = this.getAttribute("data-userid")
    },
    conversations = [],
    originalTitle = document.title,
    init = !0,
    user = null;
loaduser(), window.onhashchange = function() {
    if (console.log("location.hash:" + location.hash), "#home" == location.hash) {
        document.getElementById("chat-list").classList.remove("hm"), document.getElementById("cc").classList.add("hm");
        for (var e = document.getElementsByClassName("ubi"), t = 0; t < e.length; t++) e[t].classList.add("h");
        for (null != cci && (cci.classList.remove("cis"), cci = null), ccn.innerHTML = null, document.getElementById("ccp").setAttribute("src", "/empty-avatar.jpg"), ccn.setAttribute("data-userid", null); conversation.firstChild;) conversation.removeChild(conversation.firstChild)
    } else {
        var s = location.hash.replace("");
        document.getElementById("chat-list").classList.add("hm"), document.getElementById("cc").classList.remove("hm");
        for (var e = document.getElementsByClassName("ubi"), t = 0; t < e.length; t++) e[t].classList.remove("h");
        null != cci && (cci.classList.remove("cis"), cci = null);
        for (var a = document.getElementsByClassName("ci"), t = 0; t < a.length; t++)
            if (a[t].getAttribute("data-userid") == s) {
                cci = a[t];
                break
            }
        for (; conversation.firstChild;) conversation.removeChild(conversation.firstChild);
        null != cci ? (cci.classList.add("cis"), void 0 != cci.getElementsByClassName("unreadmessages")[0] && (cci.getElementsByClassName("unreadmessages")[0].innerHTML = ""), queryJSON("?query=display&userid=" + s, function(e) {
            var t = JSON.parse(e);
            for (x in t) m = t[x], loadMessage(m)
        })) : (c = JSON.parse(queryJSONSync("?query=newchat&userid=" + s))[0], (cci = addChatItem(c)).classList.add("cis")), ccn.innerHTML = cci.getAttribute("data-name"), "t" == cci.getAttribute("data-online") ? ccs.innerHTML = "online" : ccs.innerHTML = "", document.getElementById("ccp").setAttribute("src", cci.getAttribute("data-avatar")), ccn.setAttribute("data-userid", s), document.getElementById("input-msg").focus()
    }
};