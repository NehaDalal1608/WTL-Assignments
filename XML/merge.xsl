<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <!-- Root of the merged XML -->
    <xsl:template match="/">
        <all_properties>
            <xsl:copy-of select="document('properties1.xml')/properties/property"/>
            <xsl:copy-of select="document('properties2.xml')/properties/property"/>
        </all_properties>
    </xsl:template>

</xsl:stylesheet>
