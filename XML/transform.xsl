<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" indent="yes"/>

    <!-- Root element of the transformed XML -->
    <xsl:template match="/">
        <real_estate>
            <!-- Loop through each property and transform elements -->
            <xsl:for-each select="properties/property">
                <listing>
                    <type><xsl:value-of select="name"/></type>
                    <city><xsl:value-of select="location"/></city>
                    <cost><xsl:value-of select="price"/></cost>
                    <area><xsl:value-of select="size"/></area>
                </listing>
            </xsl:for-each>
        </real_estate>
    </xsl:template>

</xsl:stylesheet>
