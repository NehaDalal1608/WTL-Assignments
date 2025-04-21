<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Company Data</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        text-align: center;
                    }
                    table {
                        width: 80%;
                        margin: auto;
                        border-collapse: collapse;
                        background: white;
                        box-shadow: 2px 2px 10px gray;
                    }
                    th, td {
                        padding: 10px;
                        border: 1px solid black;
                        text-align: left;
                    }
                    th {
                        background-color: #007bff;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h1>Company Details</h1>

                <h2>Employees</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Joining Date</th>
                    </tr>
                    <xsl:for-each select="Company/Employees/Employee">
                        <tr>
                            <td><xsl:value-of select="@id"/></td>
                            <td><xsl:value-of select="Name"/></td>
                            <td><xsl:value-of select="Position"/></td>
                            <td><xsl:value-of select="Depart"/></td>
                            <td><xsl:value-of select="Salary"/></td>
                            <td><xsl:value-of select="JoiningDate"/></td>
                        </tr>
                    </xsl:for-each>
                </table>

                <h2>Departments</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Head</th>
                    </tr>
                    <xsl:for-each select="Company/Departments/Department">
                        <tr>
                            <td><xsl:value-of select="@id"/></td>
                            <td><xsl:value-of select="Name"/></td>
                            <td><xsl:value-of select="Head"/></td>
                        </tr>
                    </xsl:for-each>
                </table>

                <h2>Offices</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Location</th>
                        <th>Capacity</th>
                    </tr>
                    <xsl:for-each select="Company/Offices/Office">
                        <tr>
                            <td><xsl:value-of select="@id"/></td>
                            <td><xsl:value-of select="Location"/></td>
                            <td><xsl:value-of select="Capacity"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
