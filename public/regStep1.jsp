<%@ page contentType="text/html; charset=UTF-8"%>
<%
	String rootPath = request.getContextPath();
%>
<%@ taglib prefix="s" uri="/struts-tags"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><%=com.ylsoft.framework.bean.SysPara.sysTitle%>--网上开户</title>
		<script language="javascript" src="<%=rootPath%>/etc/widget/jQuery/jquery-1.7.min.js" type="text/javascript"></script>
	</head>
	<body>
		<%@ include file="/WEB-INF/page/firm/reg/regHead.jsp"%>
	<div class="com" id="step1div">
		<font>
			温馨提示：<br/>
			1.请您不要在网吧等公共场所使用网上开户系统。<br/>
			2.建议您使用IE浏览器提交开户申请，避免出现提交失败等情况的发生。<br/>
			3.一个手机号码仅可注册一个交易账号。<br/>
			<s:if test="#request.telPhone==''||#request.telPhone==null">
			
			</s:if><s:else>
			4.如您有疑问，请拨打<s:property value="#request.telPhone"/>。
			</s:else>
		</font>
		<s:form action="reg" name="regForm" id="regForm" method="post">
		 	<s:hidden name="step" value="2"></s:hidden>
			<table width="90%" cellspacing="0" cellpadding="0" border="0"
				align="center" class="table_style_1" style="margin-top: 40px;">
				
					<tr>
						<td colspan="2" width="48%" valign="top" align="center" bgcolor="#f0f0f0">
						<iframe class="" width="600px" height="500px" src="<%=rootPath%>/reg!protocolUI.do"  frameborder="1"  style="border:1px #ccc solid;"></iframe>
						</td>
					</tr>
					<s:if test='#request.protol1!=""'>
				<tr>
				<td colspan="2" width="48%" valign="top" align="left">
					&nbsp;<input type="checkbox"  value="0" id="type0"
						align="right" name="type" />
					&nbsp;&nbsp;<u><s:property value="#request.protol1"/></u>
				</td>
				</tr>
				</s:if>
				<s:if test='#request.protol2!=""'>
				<tr>
				<td colspan="2" width="48%" valign="top" align="left">
					&nbsp;<input type="checkbox"  value="1" id="type1"
						align="right" name="type" />
					&nbsp;&nbsp;<u><s:property value="#request.protol2"/></u>
				</td>
				</tr>
				</s:if>
				
				<tr>
					<td colspan="2" width="48%" valign="top" align="center">
						<s:if test="#request.ISUSED=='Y'.toString()">
							<input type="button" style="cursor: pointer" onclick="checkForm2()" align="middle" class="ydqrs" value=" " name="input" id="nextBtn"/>
						</s:if><s:else>
							<input type="button" style="cursor: pointer" onclick="checkForm()" align="middle" class="tj" value=" " name="input" id="subBtn"/>
						</s:else>
						<input type="button" style="cursor: pointer" onclick="retrievePwd()" align="middle" class="mmzh" value=" " name="input" id="retBtn"/>
					</td>
				</tr>
		</table>
		</s:form>
		</div>
		<div class="com" id="step2div" style="display: none;">
		<s:form action="reg" name="regForm" id="regForm" method="post">
		 	<s:hidden name="step" value="2"></s:hidden>
			<table width="90%" cellspacing="0" cellpadding="0" border="0"
				align="center" class="table_style_1" style="margin-top: 40px;">
					<tr>
						<td colspan="2" width="48%" valign="top" align="center">
						<font style="font-size: 25px;">
							东南大宗商品交易中心签约会员与交易商入市开户与交易活动的特别确认书
						</font>
						</td>
					</tr>
					<tr>
						<td colspan="2" width="48%" valign="top" align="left">
							<div style="width:600px; height:500px;border:1px #ccc solid;font-weight: normal;overflow: auto;margin:15px;padding:10px;" id="orderdiv" >
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;1、本人确认，已经阅读并熟知东南交易中心在其官方网站（www.dnbce.com）公布的相关信息，知悉东南交易中心是国务院批准的国家级泉州“金改区”重点金改项目，业经根据“闽政【2013】26号”文件精神与授权、“泉政文【2013】257号”文件批准正式运营的合法合规大宗商品现货电子交易第三方市场平台。
							<br/>
							&nbsp;<input type="checkbox" id="type11"align="right" name="type" />
							&nbsp;&nbsp;2、本人确认，已经阅读并熟知东南交易中心及其签约会员在其官方网站上公布的相关信息，知悉本人是与该会员签订入市协议及相关文件，构成本人与会员的合同双方权利与义务的法律主体。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;3、本人确认，已经知悉大宗商品现货电子交易市场是高风险投资市场，完全自愿参与该高风险投资活动，自愿承担该高风险投资的收益与亏损和相关法律责任；在自主开户与交易而产生投资亏损时，本人将无条件承担亏损的法律与风险责任，而不得以东南交易中心合法合规性存疑为由，对东南交易中心提出任何投诉行为，否则，本人愿意承担相应的法律责任。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;4、本人确认，本人与综合会员签约和开户的行为，是本人真实自愿意思的表达，自愿申请开户与交易并承担一切交易盈利与亏损的风险责任。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;5、本人确认，本人提供给综合会员的所有开户资料和相关信息均是真实可靠，并且均为本人主动自愿提交。综合会员业务人员没有强迫、胁迫或诱骗等违法违规行为。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;6、本人确认，本人开户后将按综合会员的要求及其业务人员的指导，由本人完成20笔模拟交易，通过模拟交易本人做到熟悉东南交易中心各个交易品种的交易规则和操作流程，同时具备独立实盘操作交易的知识和能力，愿意开通实盘交易并具备承担交易盈亏的风险能力。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;7、本人确认，本人充分了解大宗商品现货市场商品价格随着国际国内市场价格瞬息变化，充分了解参与该交易活动的高度风险性，具备该交易投资活动的风险承受能力和风险控制能力。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;8、本人确认，本人已知晓针对大宗商品现货交易业务的任何获利承诺或不会亏损承诺均为不可能的或没有依据的，本人在今后交易活动中坚决自觉抵制综合会员及其签约居间商工作人员可能存在的任何保本、盈利、不亏等违规承诺的行为。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;9、本人确认，本人的所有交易活动均为本人个人操作行为，没有委托其他任何人代为操盘交易；本人保证妥善管理交易账号、交易密码和资金账号，并且不会交予他人进行操作。否则，由此造成的一切交易盈亏风险均由本人自行承担。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;10、本人确认，本人保证不与综合会员及其签约居间商的营销业务人员公开或私下达成保本交易、风险共担、代客理财、获利保证、代办开户、诱导交易等一切违规行为。如果本人与综合会员工作人员达成此类违规行为，造成的风险均由本人自行承担；如果综合会员工作人员向本人提出以上违规行为，本人将坚决予以抵制。
							<br/>
							&nbsp;<input type="checkbox" id="type10"align="right" name="type" />
							&nbsp;&nbsp;以上承诺，连同本人签署的入市协议及其相关文件同时生效、具有同等法律效力。
							<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;东南交易中心签约会员的交易商（签名）：____________ <br/>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;时间：__年__月__日
							<br/>
							</div>
						</td>
					</tr>
				<tr>
					<td colspan="2" width="48%" valign="top" align="center">
						<input type="button" style="cursor: pointer" onclick="checkForm()" align="middle" class="tj" value=" " name="input" id="subBtn"/>
					</td>
				</tr>
		</table>
		</s:form>
		</div>
	</div>

<%@ include file="/WEB-INF/page/firm/reg/regRight.jsp"%>
<!-- 中间内容end -->
<%@ include file="/WEB-INF/page/firm/reg/regBot.jsp"%>
 <script>levelLine();</script>
<script type="text/javascript">		
	var readTime = 10;
	//校验form表单域不能为空
	function checkForm(){		
		//if(!checkEmpty("mask","手机验证码")) return false;
		<s:if test='#request.protol1!=""'>
		if(!Ischecked("type0","请阅读协议!")) return false;
		</s:if>
		<s:if test='#request.protol2!=""'>
		if(!Ischecked("type1")) return false;
		</s:if>
		<s:if test="#request.ISUSED=='Y'.toString()">
			if(!checkStatus())return false;
		</s:if>
		$("#regForm").submit();
	}
	function checkForm2(){		
		<s:if test='#request.protol1!=""'>
		if(!Ischecked("type0","请阅读协议!")) return false;
		</s:if>
		<s:if test='#request.protol2!=""'>
		if(!Ischecked("type1")) return false;
		</s:if>
		$("#step1div").hide();
		$("#step2div").show();
		changeStatus();
	}
	function Ischecked(rsId,info){
		if($("#"+rsId).is(":checked"))
			return true;
		else{
			if(info!=undefined){
				alert(info);
			}
			return false;
		}
	}
	function retrievePwd(){
		window.location="<%=rootPath%>/retrieve.do?step=1";
	}
	//改变复选框状态
	var i =0;
	function changeStatus(){
		if(i<readTime){
			$("#orderdiv :checkbox").attr("disabled","disabled");
			$("#orderdiv").css("color","gray");
			i++;
			setTimeout("changeStatus()",1000);
		}else{
			$("#orderdiv :checkbox").removeAttr("disabled");
			$("#orderdiv").css("color","black");
		}
	}
	function checkStatus(){
		var num = $("#orderdiv :checkbox:checked").length;
		if(num != 11){
			alert("请阅读并同意特别确认书!!!");
			return false;
		}else{
			return true;
		}
	}
	</script>		
   
	</body>
</html>
