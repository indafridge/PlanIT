<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebPlanner.aspx.cs" Inherits="PlanIT.Views.Home.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body style="background-color: #FFFFFF; height: 38px;">
    <form id="form1" runat="server">
        <div style="height: 37px; width: 100px">

            Welcome to PlanIT<br />
            <br />
            <br />
            <asp:TextBox ID="TextBox1" runat="server" style="margin-left: 24px; background-color: #CCFFFF" Width="170px"></asp:TextBox>
            <br />
            <br />
        </div>
        <asp:Calendar ID="Calendar1" runat="server" Height="443px" OnSelectionChanged="Calendar1_SelectionChanged" style="margin-left: 228px" Width="960px"></asp:Calendar>
        <p>
            &nbsp;</p>
    </form>
    <p>
&nbsp;&nbsp;&nbsp;
    </p>
</body>
</html>
