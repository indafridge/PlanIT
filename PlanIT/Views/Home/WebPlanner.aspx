<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebPlanner.aspx.cs" Inherits="PlanIT.Views.Home.WebForm1" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body style="background-color: #FFFFFF; height: 38px;">
    <form id="form1" runat="server">
        <div style="height: 46px; width: 223px">

            Welcome to PlanIT<br />
            <br />
            <br />
            <br />
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Task name
            <asp:TextBox ID="TextBox1" runat="server" style="margin-left: 24px; background-color: #CCFFFF" Width="170px"></asp:TextBox>
            <br />
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Task duration (minutes)<br />
            <asp:TextBox ID="TextBox2" runat="server" style="margin-left: 24px; background-color: #CCFFFF; height: 22px;" Width="170px"></asp:TextBox>
            <br />
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Repeat daily? (Y/N)<br />
            <asp:TextBox ID="TextBox3" runat="server" style="margin-left: 24px; background-color: #CCFFFF; height: 22px;" Width="170px"></asp:TextBox>
            <br />
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Task priority (1-5)<br />
            <asp:TextBox ID="TextBox4" runat="server" style="margin-left: 24px; background-color: #CCFFFF; height: 22px;" Width="170px"></asp:TextBox>
            <br />
            <br />
            <asp:Button ID="submitButton" runat="server" OnClick="Button1_Click" style="margin-left: 51px" Text="Add Task" Width="122px" />
            <br />
            <br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <asp:Label ID="Label1" runat="server"></asp:Label>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <asp:Calendar ID="Calendar1" runat="server" Height="457px" OnSelectionChanged="Calendar1_SelectionChanged" style="margin-left: 228px" Width="970px" BackColor="White" BorderColor="Black" DayNameFormat="Shortest" Font-Names="Times New Roman" Font-Size="10pt" ForeColor="Black" NextPrevFormat="FullMonth" TitleFormat="Month">
            <DayHeaderStyle BackColor="#CCCCCC" Font-Bold="True" Font-Size="7pt" ForeColor="#333333" Height="10pt" />
            <DayStyle Width="14%" />
            <NextPrevStyle Font-Size="8pt" ForeColor="White" />
            <OtherMonthDayStyle ForeColor="#999999" />
            <SelectedDayStyle BackColor="#CC3333" ForeColor="White" />
            <SelectorStyle BackColor="#CCCCCC" Font-Bold="True" Font-Names="Verdana" Font-Size="8pt" ForeColor="#333333" Width="1%" />
            <TitleStyle BackColor="Black" Font-Bold="True" Font-Size="13pt" ForeColor="White" Height="14pt" />
            <TodayDayStyle BackColor="#CCCC99" />
        </asp:Calendar>
    <p>
&nbsp;&nbsp;&nbsp;
    </p>
    </form>
    </body>
</html>
